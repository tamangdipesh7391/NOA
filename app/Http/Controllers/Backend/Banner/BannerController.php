<?php

namespace App\Http\Controllers\Backend\Banner;

use App\Http\Controllers\Backend\Common\BackendController;
use App\Repositories\Banner\BannerInterface;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class BannerController extends BackendController
{
    private BannerInterface $bannerRepo;

    public function __construct(BannerInterface $bannerRepository)
    {
        parent::__construct();
        $this->bannerRepo = $bannerRepository;
    }


    public function index(Request $request)
    {
        $resData = $this->bannerRepo->showAll()->paginate(10);
        if (!empty($request->search)) {
            $resData = $this->bannerRepo->showAll($request->search,
                ['title']
            )->paginate(100);
        }
        $this->data('bannerData', $resData);
        return view($this->pagePath . 'banner.index', $this->data);
    }


    public function create()
    {
        return view($this->pagePath . 'banner.create', $this->data);
    }


    public function store(Request $request)
    {

        $this->validate($request, [
            'title' => 'required|unique:banners,title',
            'slug' => 'required|unique:banners,slug',
            'image' => 'required',
        ]);
        $data = $request->all();
        if ($this->bannerRepo->add($data)) {
            $id = $this->bannerRepo->last();
            if ($request->hasFile('image')) {
                $filesName = $this->singleFileUpload('uploads/banners');
                $this->bannerRepo->fileUpload($id, $filesName);
                return redirect()->route('admin-banner.index')->with('success', 'data was inserted');
            } else {
                return redirect()->route('admin-banner.index')->with('success', 'data was inserted');

            }
        } else {
            return redirect()->back()->with('error', 'there was a problems');
        }
    }


    public function show($id)
    {
        $this->data('bannerData', $this->bannerRepo->get($id));
        return view($this->pagePath . 'banner.show', $this->data);
    }


    public function edit($id)
    {
        $resData = $this->bannerRepo->get($id);
        $this->data('bannerData', $resData);
        return view($this->pagePath . 'banner.update', $this->data);
    }


    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required|', [
                Rule::unique('banners', 'title')->ignore($id)
            ],
        ]);
        $getInfrastructure = $this->bannerRepo->get($id);

        if ($this->bannerRepo->update($id, $request->all())) {
            if ($request->hasFile('image')) {
                $this->deleteFile($getInfrastructure->image);
                $fileName = $this->singleFileUpload('uploads/banners');
                $this->bannerRepo->fileUpload($id, $fileName);
                return redirect()->route('admin-banner.index')->with('success', 'data was updated');

            } else {
                return redirect()->route('admin-banner.index')->with('success', 'data was updated');

            }
        } else {
            return redirect()->back()->with('error', 'there was a problems');
        }
    }


    public function destroy($id)
    {
        $this->deleteFile($this->bannerRepo->get($id)->image);
        if ($this->bannerRepo->delete($id)) {
            return redirect()->route('admin-banner.index')->with('success', 'data was deleted');
        } else {
            return redirect()->back()->with('error', 'there was a problems');
        }
    }
}
