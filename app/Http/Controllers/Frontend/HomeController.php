<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Contracts\Repositories\SlideRepository;

class HomeController extends FrontendController
{
    protected $repoSlide;

    public function __construct(
        SlideRepository $slide
    ) {
        parent::__construct();
        $this->repoSlide = $slide;
    }
    public function index(Request $request)
    {
        $this->view = 'home.index';
        $this->compacts['heading'] = __('repositories.index');
        $this->compacts['slides'] = $this->repoSlide->getDataByCategory(
            config('common.slide.limit'),
            0,
            ['description', 'image_src']
        );

        return $this->viewRender();
    }
}
