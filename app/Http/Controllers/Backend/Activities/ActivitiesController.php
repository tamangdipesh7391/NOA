<?php

namespace App\Http\Controllers\Backend\Activities;

use App\Http\Controllers\Backend\Common\BackendController;
use App\Repositories\Activities\ActivitiesInterface;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ActivitiesController extends BackendController
{
    private ActivitiesInterface $actRepo;

    public function __construct(ActivitiesInterface $activitiesRepository)
    {
        parent::__construct();
        $this->actRepo = $activitiesRepository;
    }


    public function index(Request $request)
    {
        $resData = $this->actRepo->showAll()->paginate(10);
        if (!empty($request->search)) {
            $resData = $this->actRepo->showAll($request->search,
                ['title']
            )->paginate(100);
        }
        $this->data('activitiesData', $resData);
        return view($this->pagePath . 'activities.index', $this->data);
    }


    public function create()
    {
        $this->data('menuData', $this->actRepo->getMenuData());
        return view($this->pagePath . 'activities.create', $this->data);
    }


    public function store(Request $request)
    {

        $this->validate($request, [
            'title' => 'required|unique:activities,title',
            'slug' => 'required|unique:activities,slug',
        ]);
        $data = $request->all();
        if ($this->actRepo->add($data)) {
            $id = $this->actRepo->last();
            if ($request->hasFile('image')) {
                $filesName = $this->singleFileUpload('uploads/activities');
                $this->actRepo->fileUpload($id, $filesName);
                return redirect()->route('admin-activities.index')->with('success', 'data was inserted');
            } else {
                return redirect()->route('admin-activities.index')->with('success', 'data was inserted');

            }
        } else {
            return redirect()->back()->with('error', 'there was a problems');
        }
    }


    public function show($id)
    {
        $this->data('activitiesData', $this->actRepo->get($id));
        return view($this->pagePath . 'activities.show', $this->data);
    }


    public function edit($id)
    {
        $resData = $this->actRepo->get($id);
        $this->data('menuData', $this->actRepo->getMenuData());
        $this->data('activitiesData', $resData);
        return view($this->pagePath . 'activities.update', $this->data);
    }


    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required|', [
                Rule::unique('activities', 'title')->ignore($id)
            ],
        ]);
        $getInfrastructure = $this->actRepo->get($id);

        if ($this->actRepo->update($id, $request->all())) {
            if ($request->hasFile('image')) {
                $this->deleteFile($getInfrastructure->image);
                $fileName = $this->singleFileUpload('uploads/activities');
                $this->actRepo->fileUpload($id, $fileName);
                return redirect()->route('admin-activities.index')->with('success', 'data was updated');

            } else {
                return redirect()->route('admin-activities.index')->with('success', 'data was updated');

            }
        } else {
            return redirect()->back()->with('error', 'there was a problems');
        }
    }


    public function destroy($id)
    {
        $this->deleteFile($this->actRepo->get($id)->image);
        if ($this->actRepo->delete($id)) {
            return redirect()->route('admin-activities.index')->with('success', 'data was deleted');
        } else {
            return redirect()->back()->with('error', 'there was a problems');
        }
    }
}
