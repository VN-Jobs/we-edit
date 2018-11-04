<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;

class HomeController extends FrontendController
{
    public function index(Request $request)
    {
        $this->view = 'home.index';
        $this->compacts['heading'] = __('repositories.index');
        $this->compacts['slides'] = [
            'assets/img/slides/slider_1.jpeg',
            'assets/img/slides/slider_2.jpeg',
            'assets/img/slides/slider_3.jpeg',
            'assets/img/slides/slider_4.jpeg',
        ];

        return $this->viewRender();
    }
}
