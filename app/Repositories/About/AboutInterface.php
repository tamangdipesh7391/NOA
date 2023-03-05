<?php

namespace App\Repositories\About;

interface AboutInterface
{
    public function add($data);

    public function update($id, $data);

    public function delete($id);

    public function get($id);

    public function showAll($criteria = 'search', $searchAbleField = []);

    public function last();

    public function getMenuData();

    public function fileUpload($id, $fileName);
}
