<?php

namespace App\Repositories\Admin;

use App\General\General;
use App\Helpers\SearchData;
use App\Models\Admin\Admin;
use App\Models\Admin\AdminGallery;
use Illuminate\Support\Facades\Auth;

class AdminRepository extends SearchData implements AdminInterface
{
    use General;

    public function __construct(Admin $model)
    {
        parent::__construct($model);

    }

    public function getAll($criteria = 'search', $searchAbleField = [])
    {
        return $this->filter_by_criteria($criteria, $searchAbleField);
    }

    public function paginate($perPage = null)
    {
        return Admin::paginate($perPage);
    }

    public function getById($criteria)
    {
        return Admin::findOrFail($criteria);
    }

    public function insert(array $data)
    {
        if (Admin::create($data)) {
            return true;
        } else {
            return false;
        }
    }

    public function update($id, array $data)
    {
        $obj = Admin::findOrFail($id);
        $allData = $data;
        if ($obj->update($allData)) {
            return true;
        } else {
            return false;
        }
    }

    public function delete($id)
    {
        foreach (AdminGallery::where('admin_id', '=', $id)->get() as $gallery) {
            $this->deleteFile($gallery->image);
            $gallery->delete();
        }
        $obj = Admin::findOrFail($id);
        if ($obj->delete()) {
            return true;
        } else {
            return false;
        }
    }

    public function fileUpload($id, $fileName)
    {
        return AdminGallery::create(['admin_id' => $id, 'image' => $fileName]);
    }

    public function last()
    {
        return Admin::latest()->first()->id;
    }

    public function deleteImage($filePath)
    {
        return $this->deleteFile($filePath);
    }

    public function getByGallery($id)
    {
        return AdminGallery::findOrFail($id);
    }

    public function updateGallery($id, $file)
    {

        return AdminGallery::findOrFail($id)->update([
            'image' => $file
        ]);
    }

    public function pdfData()
    {
        return Admin::all()->toArray();
    }

    public function authAdminData(){
       return Auth::guard('admin')->user();
    }
}
