<?php

namespace App\Http\Controllers\Backend\TravelGrant;

use App\Http\Controllers\Backend\Common\BackendController;
use App\Models\TravelGrant\TravelGrant;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;

class TravelGrantController extends BackendController
{
    public function index()
    {
        $this->data('tData', TravelGrant::orderBy('id', 'desc')->get());
        return view($this->pagePath . 'travel.index', $this->data);
    }


    public function create()
    {
        return view($this->pagePath . 'travel.create', $this->data);
    }


    public function store(Request $request)
    {

        $this->validate($request, [
            'start_date' => 'required',
            'end_date' => 'required',
            'title' => 'required|unique:travel_grants,title',
            'slug' => 'required|unique:travel_grants,slug'
        ]);
        $aObj = new TravelGrant();
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
        $aObj->image = $this->singleFileUpload('uploads/travel/');
        if ($aObj->save()) {
            return redirect()->route('admin-travel.index')->with('success', 'project was inserted');
        } else {
            return redirect()->back()->with('error', 'there was a problems');
        }
    }

    public function show($id)
    {
        $this->data('tData', TravelGrant::findOrFail($id));
        return view($this->pagePath . 'travel.show', $this->data);
    }

    public function edit($id)
    {
        $acData = TravelGrant::findOrFail($id);
        $this->data('tData', $acData);
        return view($this->pagePath . 'travel.update', $this->data);
    }


    public function update(Request $request, $id)
    {

        $this->validate($request, [
            'start_date' => 'required',
            'end_date' => 'required',
            'title' => 'required|', [
                Rule::unique('travel_grants', 'title')->ignore($id)
            ],
            'slug' => 'required|', [
                Rule::unique('travel_grants', 'slug')->ignore($id)
            ]

        ]);

        $aObj = TravelGrant::find($id);
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
            $aObj->image = $this->singleFileUpload('uploads/travel/');

        }
        if ($aObj->update()) {
            return redirect()->route('admin-travel.index')->with('success', 'data  was updated');
        } else {
            return redirect()->back()->with('error', 'there was a problems');
        }

    }

    public function destroy($id)
    {
        $aObj = TravelGrant::findOrFail($id);

        if ($this->deleteFile($aObj->image) && $aObj->delete()) {
            return redirect()->back()->with('success', 'Successfully Deleted');
        } else {
            return redirect()->back()->with('error', 'There was a problems');
        }

    }

    public function allParticipation(Request $request)
    {
        $id = $request->criteria;
        $this->data('tData', TravelGrant::findOrFail($id));
        return view($this->pagePath . 'travel.participation', $this->data);
    }
}
