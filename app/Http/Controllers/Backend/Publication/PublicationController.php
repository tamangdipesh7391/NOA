<?php

namespace App\Http\Controllers\Backend\Publication;

use App\Http\Controllers\Backend\Common\BackendController;
use App\Repositories\Publication\PublicationInterface;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class PublicationController extends BackendController
{
    public PublicationInterface $publicationRepo;

    public function __construct(PublicationInterface $publicationRepository)
    {
        parent::__construct();
        $this->publicationRepo = $publicationRepository;
    }


    public function index()
    {
        $publicationData = $this->publicationRepo->showAll()->paginate(4);
        if (!empty($request->search)) {
            $publicationData = $this->publicationRepo->showAll($request->search,
                ['title']
            )->paginate(100);
        }
        $this->data('publicationData', $publicationData);
        return view($this->pagePath . 'publication.index', $this->data);
    }


    public function create()
    {
        $this->data('menuData', $this->publicationRepo->getMenuData());
        return view($this->pagePath . 'publication.create', $this->data);
    }


    public function store(Request $request)
    {

        $this->validate($request, [
            'title' => 'required|unique:publications,title',
            'slug' => 'required|unique:publications,slug'
        ]);
        $data = $request->all();
        if ($request->file('image')) {
            $data['image'] = $this->singleFileUpload('uploads/publication/');
        }
        $aObj = $this->publicationRepo->add($data);
        if ($aObj->save()) {

            if ($request->file('files')) {
                $files = $request->file('files');
                $uploadPath = public_path('uploads/publication/files/');
                foreach ($files as $file) {
                    $getFiles = $file->getClientOriginalName();
                    $name = pathinfo($getFiles, PATHINFO_FILENAME);
                    $extension = $file->getClientOriginalExtension();
                    $fileName = md5(microtime()) . '.' . $extension;
                    $saveFilePath = 'uploads/publication/files/' . $fileName;
                    $file->move($uploadPath, $fileName);
                    $fileData['file'] = $saveFilePath;
                    $fileData['name'] = $name;
                    $fileData['publication_id'] = $aObj->id;
                    $this->publicationRepo->fileUpload($fileData);
                }
            }
            return redirect()->route('admin-publication.index')->with('success', 'publication was inserted');
        } else {
            return redirect()->back()->with('error', 'there was a problems');
        }
    }

    public function show($id)
    {
        $this->data('publicationData', $this->publicationRepo->get($id));
        return view($this->pagePath . 'publication.show', $this->data);
    }

    public function edit($id)
    {
        $acData = $this->publicationRepo->get($id);
        $this->data('menuData', $this->publicationRepo->getMenuData());
        $this->data('publicationData', $acData);
        return view($this->pagePath . 'publication.update', $this->data);
    }


    public function update(Request $request, $id)
    {

        $this->validate($request, [
            'title' => 'required|', [
                Rule::unique('publications', 'title')->ignore($id)
            ],
            'slug' => 'required|', [
                Rule::unique('publication', 'slug')->ignore($id)
            ]

        ]);

        $data = $request->all();
        $aObj = $this->publicationRepo->get($id);

        if ($request->hasFile('image')) {
            $this->deleteFile($aObj->image);
            $data['image'] = $this->singleFileUpload('uploads/publication/');

        }
        if ($this->publicationRepo->update($id, $data)) {
            return redirect()->route('admin-publication.index')->with('success', 'data  was updated');
        } else {
            return redirect()->back()->with('error', 'there was a problems');
        }

    }

    public function destroy($id)
    {
        $aObj = $this->publicationRepo->get($id);
        if ($aObj->totalPublicationFiles() > 0) {
            return redirect()->back()->with('error', 'There are files in this publication');
        } else {
            if ($this->deleteFile($aObj->image) && $aObj->delete()) {
                return redirect()->back()->with('success', 'Successfully Deleted');
            } else {
                return redirect()->back()->with('error', 'There was a problems');
            }
        }


    }
}
