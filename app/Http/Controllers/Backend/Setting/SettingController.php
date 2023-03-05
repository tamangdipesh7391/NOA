<?php

namespace App\Http\Controllers\Backend\Setting;

use App\Http\Controllers\Backend\Common\BackendController;
use App\Models\Setting\Setting;
use Illuminate\Http\Request;

class SettingController extends BackendController
{

    public function index()
    {
        $this->data('settingData', Setting::all());
        return view($this->pagePath . 'setting.index', $this->data);
    }


    public function create()
    {
        return view($this->pagePath . 'setting.create', $this->data);
    }


    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
        ]);

        $allData = $request->all();
        $allData['image'] = $this->singleFileUpload('uploads/setting');
        if (Setting::create($allData)) {
            return redirect()->route('setting.index')->with('success', 'data was inserted');
        } else {
            return redirect()->back()->with('error', 'there was a problems');
        }

    }


    public function show($id)
    {
        return redirect()->back();
    }


    public function edit($id)
    {

        $this->data('settingData', Setting::findOrFail($id));
        return view($this->pagePath . 'setting.update', $this->data);

    }


    public function update(Request $request, $id)
    {
        $obj = Setting::findOrFail($id);
        $allData = $request->all();
        if ($request->hasFile('image')) {
            $this->deleteFile($obj->image);
            $allData['image'] = $this->singleFileUpload('uploads/setting');
        }
        $obj->update($allData);
        return redirect()->route('setting.index')->with('success', 'data was inserted');


    }


    public function destroy($id)
    {
        $obj = Setting::findOrFail($id);
        $this->deleteFile($obj->image);
        $obj->delete();
        return redirect()->route('setting.index')->with('success', 'data was inserted');

    }
}
