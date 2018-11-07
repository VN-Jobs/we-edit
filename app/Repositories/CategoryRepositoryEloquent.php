<?php

namespace App\Repositories;

use App\Contracts\Repositories\CategoryRepository;
use App\Eloquent\Category;

class CategoryRepositoryEloquent extends AbstractRepositoryEloquent implements CategoryRepository
{
    public function __construct(Category $category)
    {
        parent::__construct($category);
    }

    public function getDataByType($type, $columns = ['*'])
    {
        return $this->model->where('type', $type)->get($columns);
    }

    public function getRandom($limit, $columns = ['*'])
    {
        return $this->model->inRandomOrder()->take($limit)->get($columns);
    }
}
