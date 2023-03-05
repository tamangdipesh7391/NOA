<?php

namespace App\Http\Controllers\Backend\Awards;

use App\Http\Controllers\Backend\Common\BackendController;
use App\Repositories\Awards\AwardsInterface;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class AwardsController extends BackendController
{
    private AwardsInterface $actRepo;

    public function __construct(AwardsInterface $awardsRepository)
    {
        parent::__construct();
        $this->actRepo = $awardsRepository;
    }


    public function index(Request $request)
    {
        $resData = $this->actRepo->showAll()->paginate(10);
        if (!empty($request->search)) {
            $resData = $this->actRepo->showAll($request->search,
                ['title']
            )->paginate(100);
        }
        $this->data('awardsData', $resData);
        return view($this->pagePath . 'awards.index', $this->data);
    }


    public function create()
    {
        $this->data('menuData', $this->actRepo->getMenuData());
        return view($this->pagePath . 'awards.create', $this->data);
    }


    public function store(Request $request)
    {

        $this->validate($request, [
            'title' => 'required|unique:awards,title',
            'slug' => 'required|unique:awards,slug',
        ]);
        $data = $request->all();
        if ($this->actRepo->add($data)) {
            $id = $this->actRepo->last();
            if ($request->hasFile('image')) {
                $filesName = $this->singleFileUpload('uploads/awards');
                $this->actRepo->fileUpload($id, $filesName);
                return redirect()->route('admin-awards.index')->with('success', 'data was inserted');
            } else {
                return redirect()->route('admin-awards.index')->with('success', 'data was inserted');

            }
        } else {
            return redirect()->back()->with('error', 'there was a problems');
        }
    }


    public function show($id)
    {
        $this->data('awardsData', $this->actRepo->get($id));
        return view($this->pagePath . 'awards.show', $this->data);
    }


    public function edit($id)
    {
        $resData = $this->actRepo->get($id);
        $this->data('menuData', $this->actRepo->getMenuData());
        $this->data('awardsData', $resData);
        return view($this->pagePath . 'awards.update', $this->data);
    }


    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required|', [
                Rule::unique('awards', 'title')->ignore($id)
            ],
        ]);
        $getInfrastructure = $this->actRepo->get($id);

        if ($this->actRepo->update($id, $request->all())) {
            if ($request->hasFile('image')) {
                $this->deleteFile($getInfrastructure->image);
                $fileName = $this->singleFileUpload('uploads/awards');
                $this->actRepo->fileUpload($id, $fileName);
                return redirect()->route('admin-awards.index')->with('success', 'data was updated');

            } else {
                return redirect()->route('admin-awards.index')->with('success', 'data was updated');

            }
        } else {
            return redirect()->back()->with('error', 'there was a problems');
        }
    }


    public function destroy($id)
    {
        $this->deleteFile($this->actRepo->get($id)->image);
        if ($this->actRepo->delete($id)) {
            return redirect()->route('admin-awards.index')->with('success', 'data was deleted');
        } else {
            return redirect()->back()->with('error', 'there was a problems');
        }
    }
}
