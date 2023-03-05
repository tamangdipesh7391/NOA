<?php

namespace App\Http\Controllers\Backend\Partners;

use App\Http\Controllers\Backend\Common\BackendController;
use App\Models\Partners\Partners;
use Illuminate\Http\Request;

class PartnersController extends BackendController
{
    public function index()
    {
        $this->data('partnersData', Partners::orderBy('id', 'desc')->get());
        return view($this->pagePath . 'partners.index', $this->data);
    }


    public function create()
    {
        $this->data('partnersData', Partners::orderBy('id', 'desc')->get());
        return view($this->pagePath . 'partners.index', $this->data);
    }


    public function store(Request $request)
    {

        $aObj = new Partners();
        $aObj->link = $request->link;
        $aObj->status = $request->status;
        $aObj->image = $this->singleFileUpload('uploads/partners/');
        if ($aObj->save()) {
            return redirect()->route('admin-partners.index')->with('success', 'partners was inserted');
        } else {
            return redirect()->back()->with('error', 'there was a problems');
        }
    }

    public function show($id)
    {
        $this->data('partnersData', Partners::orderBy('id', 'desc')->get());
        return view($this->pagePath . 'partners.index', $this->data);
    }

    public function edit($id)
    {
        $this->data('partnersData', Partners::findOrFail($id));
        return view($this->pagePath . 'partners.update', $this->data);
    }


    public function update(Request $request, $id)
    {
        $aObj = Partners::findOrFail($id);
        $aObj->link = $request->link;
        $aObj->status = $request->status;
        $aObj->order = $request->order;
        if ($request->file('image')) {
            $this->deleteFile($aObj->image);
            $aObj->image = $this->singleFileUpload('uploads/partners/');
        }

        if ($aObj->save()) {
            return redirect()->route('admin-partners.index')->with('success', 'partners was inserted');
        } else {
            return redirect()->back()->with('error', 'there was a problems');
        }
    }

    public function destroy($id)
    {
        $aObj = Partners::findOrFail($id);
        if ($this->deleteFile($aObj->image) && $aObj->delete()) {
            return redirect()->back()->with('success', 'Successfully Deleted');
        } else {
            return redirect()->back()->with('error', 'There was a problems');
        }

    }
}
