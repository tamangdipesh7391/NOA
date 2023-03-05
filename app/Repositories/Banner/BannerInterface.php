<?php

namespace App\Repositories\Banner;

interface BannerInterface
{

    public function add($data);

    public function update($id, $data);

    public function delete($id);

    public function get($id);

    public function showAll($criteria = 'search', $searchAbleField = []);

    public function last();


    public function fileUpload($id, $fileName);
}
