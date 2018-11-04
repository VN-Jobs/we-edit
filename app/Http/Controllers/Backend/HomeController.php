<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Jobs\SummerNote\UploadJob;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        return view('backend.home.index');
    }

    public function summernoteImage(Request $request)
    {
        $image =  $this->dispatchNow(new UploadJob($request->image));
        return [
            'url' => publicSrc($image->src),
        ];
    }
}
