<?php

namespace App\Repositories\Menu;

use App\Helpers\SearchData;
use App\Models\Menu\Menu;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Str;

class MenuRepository extends SearchData implements MenuInterface
{
    public function __construct(Menu $model)
    {
        parent::__construct($model);

    }

    public function add($data)
    {
        $data['slug'] = Str::slug($data['slug']);
        return $this->model->create($data);
    }

    public function update($id, $data)
    {
        $data['slug'] = Str::slug($data['slug']);
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

}
