<?php

namespace App\Repositories\Project;

use App\Helpers\SearchData;
use App\Models\Menu\Menu;
use App\Models\Project\Project;
use Illuminate\Database\Eloquent\Builder;

class ProjectRepository extends SearchData implements ProjectInterface
{

    public function __construct(Project $model)
    {
        parent::__construct($model);

    }

    public function add($data)
    {
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

    public function fileUpload($id, $fileName)
    {
        $data['image'] = $fileName;
        return $this->model->findOrFail($id)->update($data);
    }

    public function getMenuData()
    {
        return Menu::all();
    }
}
