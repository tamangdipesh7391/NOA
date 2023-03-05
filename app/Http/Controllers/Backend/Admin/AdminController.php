<?php

namespace App\Http\Controllers\Backend\Admin;


use App\Http\Controllers\Backend\Common\BackendController;
use App\Repositories\Admin\AdminInterface;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;


class AdminController extends BackendController
{
    private AdminInterface $adminRepository;

    public function __construct(AdminInterface $adminRepository)
    {
        parent::__construct();
        $this->adminRepository = $adminRepository;
    }

    public function index(Request $request)
    {
        $admin = $this->adminRepository->getAll()->paginate(4);
        if (!empty($request->search)) {
            $admin = $this->adminRepository->getAll($request->search,
                ['name', 'username', 'email', 'role']
            )->paginate(10);
        }
        $this->data('adminData', $admin);
        return view($this->pagePath . 'admin.index', $this->data);
    }


    public function create()
    {
        return view($this->pagePath . 'admin.create', $this->data);
    }


    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|min:3|max:200',
            'username' => 'required|min:3|max:20|unique:admins,username',
            'email' => 'required|unique:admins,email',
            'password' => 'required|min:5|max:20|confirmed',
            'password_confirmation' => 'required',
            'gender' => 'required',
            'image.*' => 'mimes:jpg,jpeg,png,gif',
        ]);
        if ($this->adminRepository->insert($request->all())) {
            $id = $this->adminRepository->last();
            if ($request->hasFile('image')) {
                foreach ($this->multipleFileUpload('uploads/admin') as $fileName) {
                    $this->adminRepository->fileUpload($id, $fileName);
                }
            }
            return redirect()->route('college-admin.index')->with('success', 'data was inserted');
        } else {
            return redirect()->back()->with('error', 'there was a problems');
        }
    }


    public function show($id)
    {
        $adminData = $this->adminRepository->getById($id);
        $this->data('adminData', $adminData);
        return view($this->pagePath . 'admin.show', $this->data);
    }


    public function edit($id)
    {
        $adminUsers = $this->adminRepository->getById($id);
        $this->data('adminData', $adminUsers);
        return view($this->pagePath . 'admin.update', $this->data);
    }


    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required|min:3|max:200',
            'username' => 'required|min:3|max:20|', [
                Rule::unique('admins', 'username')
                    ->ignore($id)
            ],
            'email' => 'required|', [
                Rule::unique('admins', 'email')
                    ->ignore($id)
            ],
            'gender' => 'required',
        ]);
        $this->adminRepository->update($id, $request->all());
        return redirect()->back()->with('success', 'Data was updated');

    }

    public function destroy($id)
    {
        $this->adminRepository->delete($id);
        return redirect()->back()->with('success', 'Data was deleted');
    }

    public function imageDelete(Request $request)
    {
        $id = $request->criteria;
        $findObject = $this->adminRepository->getByGallery($id);
        if ($this->adminRepository->deleteImage($findObject->image) && $findObject->delete()) {
            return redirect()->back()->with('success', 'image was deleted');
        }
        return false;
    }

    public function updateImage(Request $request, $id)
    {
        if ($request->isMethod('get')) {
            $this->data('galleryData', $this->adminRepository->getByGallery($id));
            return view($this->pagePath . 'admin.update-gallery', $this->data);
        }

        if ($request->isMethod('post')) {
            $obj = $this->adminRepository->getByGallery($id);
            if ($request->hasFile('image')) {
                $this->validate($request, [
                    'image.*' => 'mimes:jpg,jpeg,png,gif',
                ]);
                $this->adminRepository->deleteImage($obj->image);
                foreach ($this->multipleFileUpload('uploads/admin') as $fileName) {
                    $this->adminRepository->updateGallery($id, $fileName);
                }
            }
            return redirect()->back()->with('success', 'Image was updated');

        }
        return false;

    }

    public function imageAdd(Request $request, $id)
    {
        $this->validate($request, [
            'image.*' => 'required|mimes:jpg,jpeg,png,gif',
        ]);
        if ($request->hasFile('image')) {
            $totalImage = 0;
            foreach ($this->multipleFileUpload('uploads/admin') as $fileName) {
                $totalImage += 1;
                $this->adminRepository->fileUpload($id, $fileName);
            }
            return redirect()->back()->with('success', "Total {$totalImage} Image Add");
        }
        return redirect()->back()->with('error', "No file selected");
    }


    public function passwordChange(Request $request)
    {
        if ($request->isMethod('get')) {
            return view($this->pagePath . 'admin.change-password', $this->data);
        }

        if ($request->isMethod('post')) {
            $adminObj = $this->adminRepository->authAdminData();
            $adminPassword = $adminObj->password;
            $this->validate($request, [
                'old_password' => 'required|old_password:' . $adminPassword,
                'password' => 'required|min:5|max:20|confirmed',
                'password_confirmation' => 'required',
            ], [
                'old_password.old_password' => 'old password  not match'
            ]);
            $adminObj->password = bcrypt($request->password);
            if ($adminObj->update()) {
                return redirect()->back()->with('success', 'successfully change password');
            }

            return redirect()->back();

        }
        return redirect()->back()->with('error', 'there was a problem');
    }
}
