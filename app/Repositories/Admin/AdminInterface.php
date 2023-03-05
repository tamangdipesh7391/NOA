<?php

namespace App\Repositories\Admin;

interface AdminInterface
{
    public function getAll($criteria = 'search', $searchAbleField = []);

    public function paginate($perPage = null);

    public function getById($criteria);

    public function insert(array $data);

    public function update($id, array $data);

    public function delete($id);

    public function fileUpload($id, $fileName);

    public function last();

    public function deleteImage($filePath);

    public function getByGallery($id);

    public function updateGallery($id, $file);

    public function pdfData();

    public function authAdminData();


}
