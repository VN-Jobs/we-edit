<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Jobs\Config\StoreJob;
use App\Contracts\Repositories\ConfigRepository;

class ConfigController extends BackendController
{
    protected $dataSelect = ['key', 'value'];

    public function __construct(ConfigRepository $config)
    {
        parent::__construct($config);
    }

    public function index()
    {
        parent::__index();
        $this->compacts['items'] = $this->repository->getData($this->dataSelect);

        return $this->viewRender();
    }

    public function store(Request $request)
    {
        return $request->all();
    }
}
