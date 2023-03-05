<?php

namespace App\Http\Controllers\Backend\Content;

use App\Http\Controllers\Backend\Common\BackendController;
use App\Models\Content\Content;
use App\Models\Content\ContentType;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ContentTypeController extends BackendController
{

    public function index()
    {
        $this->data('contentTypeData', ContentType::all());
        return view($this->pagePath . 'content-type.index', $this->data);
    }

    public function create()
    {
        return view($this->pagePath . 'content-type.create', $this->data);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|unique:content_types,title',
            'slug' => 'required|unique:content_types,slug',
        ]);
        $contentType = new ContentType();
        $contentType->title = $request->title;
        $contentType->slug = $request->slug;
        $contentType->description = $request->description;
        $contentType->status = $request->status;
        $contentType->image = $this->singleFileUpload('uploads/content');
        $contentType->save();
        return redirect()->route('admin-content-type.index')->with('success', 'Content Type created successfully.');
    }

    public function show($id)
    {
        $this->data('contentTypeData', ContentType::find($id));
        return view($this->pagePath . 'content-type.show', $this->data);
    }

    public function edit($id)
    {
        $this->data('contentTypeData', ContentType::find($id));
        return view($this->pagePath . 'content-type.update', $this->data);
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required|', [
                Rule::unique('content_types', 'title')->ignore($id),
            ],
            'slug' => 'required|', [
                Rule::unique('content_types', 'slug')->ignore($id),
            ],
        ]);
        $contentType = ContentType::find($id);
        $contentType->title = $request->title;
        $contentType->slug = $request->slug;
        $contentType->description = $request->description;
        $contentType->status = $request->status;
        if ($request->file('image')) {
            $this->deleteFile($contentType->image);
            $contentType->image = $this->singleFileUpload('uploads/content');
        }
        $contentType->save();
        return redirect()->route('admin-content-type.index')->with('success', 'Content Type updated successfully.');
    }


    public function destroy($id)
    {
        $totalContent = Content::where('content_type_id', $id)->count();
        if ($totalContent > 0) {
            return redirect()->route('admin-content-type.index')->with('error', 'Content Type is in use.');
        } else {
            $contentType = ContentType::find($id);
            $this->deleteFile($contentType->image);
            $contentType->delete();
            return redirect()->route('admin-content-type.index')->with('success', 'Content Type deleted successfully.');
        }
    }
}
