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

        return $this->viewRender();
    }
}
