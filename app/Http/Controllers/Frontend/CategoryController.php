<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Contracts\Repositories\CategoryRepository;

class CategoryController extends FrontendController
{
    public function __construct(
        CategoryRepository $category
    ) {
        parent::__construct($category);
    }

    public function show($slug)
    {
        $category = $this->repository->findBySlugOrFail($slug);
        $this->view = 'category.show';
        $this->compacts['heading'] = $category->name;
        $this->compacts['category'] = $category;

        return $this->viewRender();
    }
}
