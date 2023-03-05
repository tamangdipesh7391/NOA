<?php

namespace App\Http\Controllers\Backend\FRAF;

use App\Http\Controllers\Backend\Common\BackendController;
use App\Models\FRAF\FRAF;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;

class FRAFController extends BackendController
{
    public function index()
    {
        $this->data('projectData', FRAF::orderBy('id', 'desc')->get());
        return view($this->pagePath . 'fraf.index', $this->data);
    }


    public function create()
    {
        return view($this->pagePath . 'fraf.create', $this->data);
    }


    public function store(Request $request)
    {

        $this->validate($request, [
            'title' => 'required|unique:f_r_a_f_s,title',
            'slug' => 'required|unique:f_r_a_f_s,slug'
        ]);
        $aObj = new FRAF();
        $aObj->title = $request->title;
        $aObj->slug = Str::slug($request->slug);
        $aObj->date = $request->date;
        $aObj->status = $request->status;
        $aObj->end_date = $request->end_date;
        $aObj->meta_title = $request->meta_title;
        $aObj->meta_description = $request->meta_description;
        $aObj->intro_text = $request->intro_text;
        $aObj->description = $request->description;
        $aObj->image = $this->singleFileUpload('uploads/fraf/');
        if ($aObj->save()) {
            return redirect()->route('admin-fraf.index')->with('success', 'project was inserted');
        } else {
            return redirect()->back()->with('error', 'there was a problems');
        }
    }

    public function show($id)
    {
        $this->data('projectData', FRAF::findOrFail($id));
        return view($this->pagePath . 'fraf.show', $this->data);
    }

    public function edit($id)
    {
        $acData = FRAF::findOrFail($id);
        $this->data('projectData', $acData);
        return view($this->pagePath . 'fraf.update', $this->data);
    }


    public function update(Request $request, $id)
    {

        $this->validate($request, [
            'title' => 'required|', [
                Rule::unique('f_r_a_f_s', 'title')->ignore($id)
            ],
            'slug' => 'required|', [
                Rule::unique('f_r_a_f_s', 'slug')->ignore($id)
            ]

        ]);

        $aObj = FRAF::find($id);
        $aObj->title = $request->title;
        $aObj->slug = Str::slug($request->title);
        $aObj->date = $request->date;
        $aObj->status = $request->status;
        $aObj->end_date = $request->end_date;
        $aObj->meta_title = $request->meta_title;
        $aObj->meta_description = $request->meta_description;
        $aObj->intro_text = $request->intro_text;
        $aObj->description = $request->description;
        if ($request->hasFile('image')) {
            $this->deleteFile($aObj->image);
            $aObj->image = $this->singleFileUpload('uploads/fraf/');

        }
        if ($aObj->update()) {
            return redirect()->route('admin-fraf.index')->with('success', 'data  was updated');
        } else {
            return redirect()->back()->with('error', 'there was a problems');
        }

    }

    public function destroy($id)
    {
        $aObj = FRAF::findOrFail($id);

        if ($this->deleteFile($aObj->image) && $aObj->delete()) {
            return redirect()->back()->with('success', 'Successfully Deleted');
        } else {
            return redirect()->back()->with('error', 'There was a problems');
        }

    }
}
