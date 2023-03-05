<?php

namespace App\Http\Controllers\Backend\Content;

use App\Http\Controllers\Backend\Common\BackendController;
use App\Models\Content\Content;
use App\Models\Content\ContentType;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;

class ContentController extends BackendController
{
    public function index()
    {
        $this->data('contentData', Content::orderBy('id', 'desc')->get());
        return view($this->pagePath . 'content.index', $this->data);
    }


    public function create()
    {
        $this->data('contentTypeData', ContentType::all());
        return view($this->pagePath . 'content.create', $this->data);
    }


    public function store(Request $request)
    {

        $this->validate($request, [
            'title' => 'required',
            'slug' => 'required|unique:contents,slug',
            'content_type_id' => 'required',
        ]);
        $aObj = new Content();
        $aObj->title = $request->title;
        $aObj->slug = Str::slug($request->slug);
        $aObj->status = $request->status;
        $aObj->meta_title = $request->meta_title;
        $aObj->meta_description = $request->meta_description;
        $aObj->intro_text = $request->intro_text;
        $aObj->description = $request->description;
        $aObj->image = $this->singleFileUpload('uploads/content/');
        $aObj->content_type_id = $request->content_type_id;
        if ($aObj->save()) {
            return redirect()->route('admin-content.index')->with('success', 'activities was inserted');
        } else {
            return redirect()->back()->with('error', 'there was a problems');
        }
    }

    public function show($id)
    {
        $this->data('contentData', Content::findOrFail($id));
        return view($this->pagePath . 'content.show', $this->data);
    }

    public function edit($id)
    {
        $acData = Content::findOrFail($id);
        $this->data('contentTypeData', ContentType::all());
        $this->data('contentData', $acData);
        return view($this->pagePath . 'content.update', $this->data);
    }


    public function update(Request $request, $id)
    {

        $this->validate($request, [
            'title' => 'required',
            'slug' => 'required|', [
                Rule::unique('contents', 'slug')->ignore($id)
            ],
            'content_type_id' => 'required',

        ]);

        $aObj = Content::find($id);
        $aObj->title = $request->title;
        $aObj->slug = Str::slug($request->title);
        $aObj->status = $request->status;
        $aObj->meta_title = $request->meta_title;
        $aObj->meta_description = $request->meta_description;
        $aObj->intro_text = $request->intro_text;
        $aObj->description = $request->description;
        $aObj->content_type_id = $request->content_type_id;
        if ($request->hasFile('image')) {
            $this->deleteFile($aObj->image);
            $aObj->image = $this->singleFileUpload('uploads/content/');

        }
        if ($aObj->update()) {
            return redirect()->route('admin-content.index')->with('success', 'data  was updated');
        } else {
            return redirect()->back()->with('error', 'there was a problems');
        }

    }

    public function destroy($id)
    {
        $aObj = Content::findOrFail($id);
        if ($this->deleteFile($aObj->image) && $aObj->delete()) {
            return redirect()->back()->with('success', 'Successfully Deleted');
        } else {
            return redirect()->back()->with('error', 'There was a problems');
        }

    }
}
