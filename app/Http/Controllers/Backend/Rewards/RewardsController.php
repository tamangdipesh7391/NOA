<?php

namespace App\Http\Controllers\Backend\Rewards;

use App\Http\Controllers\Backend\Common\BackendController;
use App\Repositories\Rewards\RewardsInterface;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class RewardsController extends BackendController
{
    private RewardsInterface $actRepo;

    public function __construct(RewardsInterface $awardsRepository)
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
        $this->data('rewardsData', $resData);
        return view($this->pagePath . 'rewards.index', $this->data);
    }


    public function create()
    {
        $this->data('menuData', $this->actRepo->getMenuData());
        return view($this->pagePath . 'rewards.create', $this->data);
    }


    public function store(Request $request)
    {

        $this->validate($request, [
            'title' => 'required|unique:rewards,title',
            'slug' => 'required|unique:rewards,slug',
        ]);
        $data = $request->all();
        if ($this->actRepo->add($data)) {
            $id = $this->actRepo->last();
            if ($request->hasFile('image')) {
                $filesName = $this->singleFileUpload('uploads/rewards');
                $this->actRepo->fileUpload($id, $filesName);
                return redirect()->route('admin-rewards.index')->with('success', 'data was inserted');
            } else {
                return redirect()->route('admin-rewards.index')->with('success', 'data was inserted');

            }
        } else {
            return redirect()->back()->with('error', 'there was a problems');
        }
    }


    public function show($id)
    {
        $this->data('rewardsData', $this->actRepo->get($id));
        return view($this->pagePath . 'rewards.show', $this->data);
    }


    public function edit($id)
    {
        $resData = $this->actRepo->get($id);
        $this->data('menuData', $this->actRepo->getMenuData());
        $this->data('rewardsData', $resData);
        return view($this->pagePath . 'rewards.update', $this->data);
    }


    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required|', [
                Rule::unique('rewards', 'title')->ignore($id)
            ],
        ]);
        $getInfrastructure = $this->actRepo->get($id);

        if ($this->actRepo->update($id, $request->all())) {
            if ($request->hasFile('image')) {
                $this->deleteFile($getInfrastructure->image);
                $fileName = $this->singleFileUpload('uploads/rewards');
                $this->actRepo->fileUpload($id, $fileName);
                return redirect()->route('admin-rewards.index')->with('success', 'data was updated');

            } else {
                return redirect()->route('admin-rewards.index')->with('success', 'data was updated');

            }
        } else {
            return redirect()->back()->with('error', 'there was a problems');
        }
    }


    public function destroy($id)
    {
        $this->deleteFile($this->actRepo->get($id)->image);
        if ($this->actRepo->delete($id)) {
            return redirect()->route('admin-rewards.index')->with('success', 'data was deleted');
        } else {
            return redirect()->back()->with('error', 'there was a problems');
        }
    }
}
