<?php

namespace App\Http\Controllers\Backend\About;

use App\Http\Controllers\Backend\Common\BackendController;
use App\Repositories\About\AboutInterface;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class AboutController extends BackendController
{
    private AboutInterface $aboutRepo;

    public function __construct(AboutInterface $aboutRepository)
    {
        parent::__construct();
        $this->aboutRepo = $aboutRepository;
    }


    public function index(Request $request)
    {
        $aboutData = $this->aboutRepo->showAll()->paginate(10);
        if (!empty($request->search)) {
            $aboutData = $this->aboutRepo->showAll($request->search,
                ['title']
            )->paginate(100);
        }
        $this->data('aboutData', $aboutData);
        return view($this->pagePath . 'about.index', $this->data);
    }


    public function create()
    {
        $this->data('menuData', $this->aboutRepo->getMenuData());
        return view($this->pagePath . 'about.create', $this->data);
    }


    public function store(Request $request)
    {

        $this->validate($request, [
            'title' => 'required|unique:abouts,title',
            'slug' => 'required|unique:abouts,slug',
        ]);
        $data = $request->all();
        if ($this->aboutRepo->add($data)) {
            $id = $this->aboutRepo->last();
            if ($request->hasFile('image')) {
                $filesName = $this->singleFileUpload('uploads/about');
                $this->aboutRepo->fileUpload($id, $filesName);
                return redirect()->route('admin-about.index')->with('success', 'data was inserted');
            } else {
                return redirect()->route('admin-about.index')->with('success', 'data was inserted');

            }
        } else {
            return redirect()->back()->with('error', 'there was a problems');
        }
    }


    public function show($id)
    {
        $this->data('aboutData', $this->aboutRepo->get($id));
        return view($this->pagePath . 'about.show', $this->data);
    }


    public function edit($id)
    {
        $aboutData = $this->aboutRepo->get($id);
        $this->data('menuData', $this->aboutRepo->getMenuData());
        $this->data('aboutData', $aboutData);
        return view($this->pagePath . 'about.update', $this->data);
    }


    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required|', [
                Rule::unique('abouts', 'title')->ignore($id)
            ],
        ]);
        $getInfrastructure = $this->aboutRepo->get($id);

        if ($this->aboutRepo->update($id, $request->all())) {
            if ($request->hasFile('image')) {
                $this->deleteFile($getInfrastructure->image);
                $fileName = $this->singleFileUpload('uploads/about');
                $this->aboutRepo->fileUpload($id, $fileName);
                return redirect()->route('admin-about.index')->with('success', 'data was updated');

            } else {
                return redirect()->route('admin-about.index')->with('success', 'data was updated');

            }
        } else {
            return redirect()->back()->with('error', 'there was a problems');
        }
    }


    public function destroy($id)
    {
        $this->deleteFile($this->aboutRepo->get($id)->image);
        if ($this->aboutRepo->delete($id)) {
            return redirect()->route('admin-about.index')->with('success', 'data was deleted');
        } else {
            return redirect()->back()->with('error', 'there was a problems');
        }
    }
}
