<?php

namespace App\Http\Controllers\Frontend;

use Mail;
use Illuminate\Http\Request;
use App\Contracts\Repositories\SlideRepository;
use App\Contracts\Repositories\ContactRepository;
use App\Contracts\Repositories\ProductRepository;
use App\Contracts\Repositories\ConfigRepository;

class HomeController extends FrontendController
{
    protected $repoSlide;
    protected $repoContact;
    protected $repoProduct;

    public function __construct(
        SlideRepository $slide,
        ContactRepository $contact,
        ProductRepository $product
    ) {
        parent::__construct();
        $this->repoSlide = $slide;
        $this->repoContact = $contact;
        $this->repoProduct = $product;
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

        $this->compacts['products'] = $this->repoProduct->getHome(
            config('common.product.limit'),
            ['id', 'name', 'image_src', 'image_title', 'intro', 'price', 'category_id']
        );

        return $this->viewRender();
    }

    public function contactShow()
    {
        $this->view = 'home._contact';

        return $this->viewRender();
    }

    public function contactStore(Request $request, ConfigRepository $config)
    {
        $this->validate($request, [
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
        ]);

        $configs = $config->getData(['value', 'key'])->pluck('value', 'key');

        Mail::send('emails.send', [
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'msg' => $request->message,
        ], function ($mail) use($request, $configs) {
            $mail->from($request->email, $request->last_name);
            $mail->to($configs['mail']['address'])->subject($configs['mail']['subject']);
        });

        return redirect()->back()->with('flash_message', __('repositories.text.message_contact'));
    }
}
