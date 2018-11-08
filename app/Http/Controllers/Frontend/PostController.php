<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Contracts\Repositories\PostRepository;

class PostController extends FrontendController
{
    public function __construct(
        PostRepository $post
    ) {
        parent::__construct($post);
    }

    public function index(Request $request)
    {
        $this->view = 'blog.index';
        $this->compacts['heading'] = __('repositories.title.post');
        $this->compacts['posts'] = $this->repository->scopeDatatables()->limit(6)->latest()->get();

        return $this->viewRender();
    }

    public function show($slug)
    {
        $this->view = 'blog.show';
        $this->compacts['heading'] = __('repositories.title.post');
        $this->compacts['post'] = $this->repository->findBySlug($slug);

        return $this->viewRender();
    }
}
