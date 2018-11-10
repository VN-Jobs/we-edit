<?php

namespace App\Jobs\Category;

use App\Jobs\Job;
use App\Contracts\Repositories\CategoryRepository;

class CollectionJob extends Job
{
    protected $params;
    protected $item;

    public function __construct(array $params, $item)
    {
        parent::__construct();
        $this->params = $params;
        $this->item = $item;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle(CategoryRepository $repository)
    {
        $data = array_only($this->params, ['collection_title', 'collection_intro']);

        $repository->update($this->item, $data);
    }
}
