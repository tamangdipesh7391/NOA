<?php

namespace App\Http\Controllers\Backend\Conference;

use App\Http\Controllers\Backend\Common\BackendController;
use App\Models\Conference\Conference;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;

class ConferenceController extends BackendController
{
    public function index()
    {
        $this->data('conferenceData', Conference::orderBy('id', 'desc')->get());
        return view($this->pagePath . 'conference.index', $this->data);
    }


    public function create()
    {
        return view($this->pagePath . 'conference.create', $this->data);
    }


    public function store(Request $request)
    {

        $this->validate($request, [
            'start_date' => 'required',
            'end_date' => 'required',
            'title' => 'required|unique:conferences,title',
            'slug' => 'required|unique:conferences,slug'
        ]);
        $aObj = new Conference();
        $aObj->date = $request->start_date;
        $aObj->end_date = $request->end_date;
        $aObj->title = $request->title;
        $aObj->slug = Str::slug($request->slug);
        $aObj->status = $request->status;
        $aObj->end_date = $request->end_date;
        $aObj->meta_title = $request->meta_title;
        $aObj->meta_description = $request->meta_description;
        $aObj->intro_text = $request->intro_text;
        $aObj->description = $request->description;
        $aObj->image = $this->singleFileUpload('uploads/conference/');
        if ($aObj->save()) {
            return redirect()->route('admin-conference.index')->with('success', 'project was inserted');
        } else {
            return redirect()->back()->with('error', 'there was a problems');
        }
    }

    public function show($id)
    {
        $this->data('conferenceData', Conference::findOrFail($id));
        return view($this->pagePath . 'conference.show', $this->data);
    }

    public function edit($id)
    {
        $acData = Conference::findOrFail($id);
        $this->data('conferenceData', $acData);
        return view($this->pagePath . 'conference.update', $this->data);
    }


    public function update(Request $request, $id)
    {

        $this->validate($request, [
            'start_date' => 'required',
            'end_date' => 'required',
            'title' => 'required|', [
                Rule::unique('conferences', 'title')->ignore($id)
            ],
            'slug' => 'required|', [
                Rule::unique('conferences', 'slug')->ignore($id)
            ]

        ]);

        $aObj = Conference::find($id);
        $aObj->title = $request->title;
        $aObj->slug = Str::slug($request->title);
        $aObj->date = $request->start_date;
        $aObj->status = $request->status;
        $aObj->end_date = $request->end_date;
        $aObj->meta_title = $request->meta_title;
        $aObj->meta_description = $request->meta_description;
        $aObj->intro_text = $request->intro_text;
        $aObj->description = $request->description;
        if ($request->hasFile('image')) {
            $this->deleteFile($aObj->image);
            $aObj->image = $this->singleFileUpload('uploads/conference/');

        }
        if ($aObj->update()) {
            return redirect()->route('admin-conference.index')->with('success', 'data  was updated');
        } else {
            return redirect()->back()->with('error', 'there was a problems');
        }

    }

    public function destroy($id)
    {
        $aObj = Conference::findOrFail($id);

        if ($this->deleteFile($aObj->image) && $aObj->delete()) {
            return redirect()->back()->with('success', 'Successfully Deleted');
        } else {
            return redirect()->back()->with('error', 'There was a problems');
        }

    }

    public function allParticipation(Request $request)
    {
        $id = $request->criteria;
        $this->data('conferenceData', Conference::findOrFail($id));
        return view($this->pagePath . 'conference.participation', $this->data);
    }
}
