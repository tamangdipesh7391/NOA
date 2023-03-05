<?php

namespace App\Repositories\Publication;

use App\Helpers\SearchData;
use App\Models\Menu\Menu;
use App\Models\Publications\Publications;
use App\Models\Publications\PublicationFiles;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Str;


class PublicationRepository extends SearchData implements PublicationInterface
{

    public function __construct(Publications $model)
    {
        parent::__construct($model);

    }

    public function add($data)
    {
        $data['slug'] = Str::slug($data['slug'], '-');
        return $this->model->create($data);
    }

    public function update($id, $data)
    {
        return $this->model->findOrFail($id)->update($data);
    }

    public function delete($id)
    {
        return $this->model->findOrFail($id)->delete();
    }

    public function get($id)
    {
        return $this->model->findOrFail($id);
    }

    public function ShowAll($criteria = 'search', $searchAbleField = []): Builder
    {
        return $this->filter_by_criteria($criteria, $searchAbleField);
    }

    public function last()
    {
        return $this->model->latest()->first()->id;
    }

    public function fileUpload($fileData)
    {
        return PublicationFiles::create($fileData);
    }

    public function getMenuData()
    {
        return Menu::all();
    }

}
