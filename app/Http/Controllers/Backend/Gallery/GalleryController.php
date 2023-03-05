<?php

namespace App\Http\Controllers\Backend\Gallery;

use App\Http\Controllers\Backend\Common\BackendController;
use App\Models\Gallery\Gallery;
use App\Models\Gallery\GalleryImage;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;

class GalleryController extends BackendController
{

    public function index()
    {
        $this->data('galleryData', Gallery::orderBy('id', 'desc')->get());
        return view($this->pagePath . 'gallery.index', $this->data);
    }

    public function create()
    {
        return redirect()->back();
    }


    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|unique:galleries,title'
        ]);
        $gallery = new Gallery();
        $gallery->title = $request->title;
        $gallery->slug = Str::slug($request->title);
        if ($gallery->save()) {
            if ($request->hasFile('photos')) {
                $files = $request->file('photos');
                foreach ($files as $file) {
                    $imageName = md5(microtime()) . '.' . Str::lower($file->getClientOriginalExtension());
                    $file->move('uploads/gallery', $imageName);
                    GalleryImage::create([
                        'gallery_id' => $gallery->id,
                        'image_name' => 'uploads/gallery/' . $imageName,
                    ]);
                }
            }
            return redirect()->route('admin-gallery.index')->with('success', 'Gallery Created Successfully');
        } else {
            return redirect()->route('admin-gallery.index')->with('error', 'Gallery Created Failed');
        }
    }


    public function show($id)
    {
        $this->data('galleryData', Gallery::find($id));
        $this->data('galleryImageData', GalleryImage::where('gallery_id', $id)->get());
        return view($this->pagePath . 'gallery.show', $this->data);
    }


    public function edit($id)
    {
        $this->data('galleryData', Gallery::find($id));
        return view($this->pagePath . 'gallery.edit', $this->data);
    }


    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required|', [
                Rule::unique('galleries', 'title')->ignore($id),
            ]
        ]);
        $gallery = Gallery::find($id);
        $gallery->title = $request->title;
        $gallery->slug = Str::slug($request->title);
        if ($gallery->save()) {
            if ($request->hasFile('photos')) {
                $files = $request->file('photos');
                foreach ($files as $file) {
                    $imageName = md5(microtime()) . '.' . Str::lower($file->getClientOriginalExtension());
                    $file->move('uploads/gallery', $imageName);
                    GalleryImage::create([
                        'gallery_id' => $gallery->id,
                        'image_name' => 'uploads/gallery/' . $imageName,
                    ]);
                }
            }
            return redirect()->back()->with('success', 'Gallery Created Successfully');
        } else {
            return redirect()->back()->with('error', 'Gallery Created Failed');
        }
    }


    public function destroy($id)
    {
        $totalImage = GalleryImage::where('gallery_id', $id)->count();
        for ($i = 0; $i < $totalImage; $i++) {
            $galleryImage = GalleryImage::where('gallery_id', $id)->first();
            $this->deleteFile($galleryImage->image_name);
            $galleryImage->delete();
        }
        $gallery = Gallery::find($id);
        if ($gallery->delete()) {
            return redirect()->route('admin-gallery.index')->with('success', 'Gallery Deleted Successfully');
        } else {
            return redirect()->route('admin-gallery.index')->with('error', 'Gallery Deleted Failed');
        }
    }

    public function deleteGalleryImage($id)
    {
        $galleryImage = GalleryImage::find($id);
        if ($galleryImage) {
            $this->deleteFile($galleryImage->image_name);
            $galleryImage->delete();
            return redirect()->back()->with('success', 'Gallery Image Deleted Successfully');
        } else {
            return redirect()->back()->with('error', 'Gallery Image Deleted Failed');
        }
    }

    public function editGalleryImage(Request $request, $id)
    {
        if ($request->isMethod('get')) {
            $this->data('galleryImageData', GalleryImage::find($id));
            return view($this->pagePath . 'gallery.update-image', $this->data);
        }
        if ($request->isMethod('post')) {
            $galleryImage = GalleryImage::find($id);
            $this->deleteFile($galleryImage->image_name);
            $image = $this->customFileUpload('uploads/gallery');
            $galleryImage->image_name = $image;
            if ($galleryImage->save()) {
                return redirect()->back()->with('success', 'Gallery Image Updated Successfully');
            } else {
                return redirect()->back()->with('error', 'Gallery Image Updated Failed');
            }
        }

    }
}
