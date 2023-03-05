<?php

namespace App\Repositories\Publication;

interface PublicationInterface
{

    public function add($data);

    public function update($id, $data);

    public function delete($id);

    public function get($id);

    public function showAll($criteria = 'search', $searchAbleField = []);

    public function last();

    public function getMenuData();

    public function fileUpload($fileName);

}
