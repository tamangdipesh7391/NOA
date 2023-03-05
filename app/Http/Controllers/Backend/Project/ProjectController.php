<?php

namespace App\Http\Controllers\Backend\Project;

use App\Http\Controllers\Backend\Common\BackendController;
use App\Repositories\Project\ProjectInterface;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ProjectController extends BackendController
{
    private ProjectInterface $projectRepo;

    public function __construct(ProjectInterface $projectRepository)
    {
        parent::__construct();
        $this->projectRepo = $projectRepository;
    }

    public function index(Request $request)
    {
        $resData = $this->projectRepo->showAll()->paginate(10);
        if (!empty($request->search)) {
            $resData = $this->projectRepo->showAll($request->search,
                ['title']
            )->paginate(100);
        }
        $this->data('projectData', $resData);
        return view($this->pagePath . 'project.index', $this->data);
    }


    public function create()
    {
        $this->data('menuData', $this->projectRepo->getMenuData());
        return view($this->pagePath . 'project.create', $this->data);
    }


    public function store(Request $request)
    {

        $this->validate($request, [
            'title' => 'required|unique:projects,title',
            'slug' => 'required|unique:projects,slug',
        ]);
        $data = $request->all();
        if ($this->projectRepo->add($data)) {
            $id = $this->projectRepo->last();
            if ($request->hasFile('image')) {
                $filesName = $this->singleFileUpload('uploads/projects');
                $this->projectRepo->fileUpload($id, $filesName);
                return redirect()->route('admin-project.index')->with('success', 'data was inserted');
            } else {
                return redirect()->route('admin-project.index')->with('success', 'data was inserted');

            }
        } else {
            return redirect()->back()->with('error', 'there was a problems');
        }
    }


    public function show($id)
    {
        $this->data('projectData', $this->projectRepo->get($id));
        return view($this->pagePath . 'project.show', $this->data);
    }


    public function edit($id)
    {
        $aboutData = $this->projectRepo->get($id);
        $this->data('menuData', $this->projectRepo->getMenuData());
        $this->data('projectData', $aboutData);
        return view($this->pagePath . 'project.update', $this->data);
    }


    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required|', [
                Rule::unique('projects', 'title')->ignore($id)
            ],
        ]);
        $getInfrastructure = $this->projectRepo->get($id);

        if ($this->projectRepo->update($id, $request->all())) {
            if ($request->hasFile('image')) {
                $this->deleteFile($getInfrastructure->image);
                $fileName = $this->singleFileUpload('uploads/projects');
                $this->projectRepo->fileUpload($id, $fileName);
                return redirect()->route('admin-project.index')->with('success', 'data was updated');

            } else {
                return redirect()->route('admin-project.index')->with('success', 'data was updated');

            }
        } else {
            return redirect()->back()->with('error', 'there was a problems');
        }
    }


    public function destroy($id)
    {
        $this->deleteFile($this->projectRepo->get($id)->image);
        if ($this->projectRepo->delete($id)) {
            return redirect()->route('admin-project.index')->with('success', 'data was deleted');
        } else {
            return redirect()->back()->with('error', 'there was a problems');
        }
    }
}
