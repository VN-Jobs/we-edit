<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Contracts\Repositories\CategoryRepository;
use App\Http\Requests\Backend\CategoryRequest;
use App\Jobs\Category\StoreJob;
use App\Jobs\Category\UpdateJob;

class CategoryController extends BackendController
{
    public function __construct(CategoryRepository $category)
    {
        parent::__construct($category);
    }

    protected function indexRender($type, $action = 'create')
    {
        if (!in_array($type, config('common.category.type'))) {
            abort(403);
        }
        $this->view = sprintf('%s.index', $this->repositoryName);
        $this->compacts['heading'] = sprintf(
            '%s %s',
            __('repositories.title.category'),
            __("repositories.title.{$type}")
        );
        $this->compacts['action'] = __("repositories.title.{$action}");
        $this->compacts['items'] = $this->repository->getDataByType($type);

        return $this->viewRender();
    }

    public function type($type)
    {
        $this->compacts['type'] = $type;

        return $this->indexRender($type);
    }

    public function store(CategoryRequest $request)
    {
        $data = $request->all();

        return $this->doRequest(function () use ($data) {
            return $this->dispatch(new StoreJob($data));
        }, __FUNCTION__, false, url()->previous());
    }

    public function edit($item)
    {
        parent::__edit($item);
        $this->compacts['type'] = $this->compacts['item']->type;

        return $this->indexRender($this->compacts['item']->type, 'edit');
    }

    public function update(CategoryRequest $request, $item)
    {
        $data = $request->all();

        return $this->doRequest(function () use ($data, $item) {
            return $this->dispatch(new UpdateJob($data, $item));
        }, __FUNCTION__, false, url()->previous());
    }

    public function destroy($item)
    {
        return $this->doRequest(function () use ($item) {
            $status = $this->repository->delete($item);
            if (!$status) {
                throw new \Exception();
            }
        }, __FUNCTION__);
    }
}
