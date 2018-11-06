<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Jobs\SummerNote\UploadJob;
use App\Contracts\Repositories\ContactRepository;
use App\Jobs\Contact\IndexJob;

class HomeController extends BackendController
{
    public function __construct(ContactRepository $contact)
    {
        parent::__construct($contact);
    }

    public function index(Request $request)
    {
        parent::__index();
        $this->view = 'home.index';
        if ($request->ajax() && $request->has('datatables')) {
            $params = $request->all();

            return $this->dispatchNow(new IndexJob($params));
        }

        return $this->viewRender();
    }

    public function destroy($item)
    {
        return $this->doRequest(function () use ($item) {
            return $this->repository->delete($item);
        }, __FUNCTION__);
    }

    public function summernoteImage(Request $request)
    {
        $image =  $this->dispatchNow(new UploadJob($request->image));
        return [
            'url' => publicSrc($image->src),
        ];
    }
}
