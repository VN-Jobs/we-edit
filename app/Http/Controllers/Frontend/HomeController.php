<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Contracts\Repositories\SlideRepository;
use App\Contracts\Repositories\ContactRepository;

class HomeController extends FrontendController
{
    protected $repoSlide;
    protected $repoContact;

    public function __construct(
        SlideRepository $slide,
        ContactRepository $contact
    ) {
        parent::__construct();
        $this->repoSlide = $slide;
        $this->repoContact = $contact;
    }
    public function index(Request $request)
    {
        $this->view = 'home.index';
        $this->compacts['slides'] = $this->repoSlide->getDataByCategory(
            config('common.slide.limit'),
            0,
            ['description', 'image_src']
        );
        $this->compacts['testimonials'] = $this->repoContact->getTestimonials(
            config('common.contact.limit'),
            ['first_name', 'last_name', 'company', 'avatar', 'message']
        );

        return $this->viewRender();
    }
}
