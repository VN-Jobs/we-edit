<?php

namespace App\Jobs\Contact;

use App\Jobs\Job;
use Yajra\DataTables\Facades\DataTables;
use App\Contracts\Repositories\ContactRepository;
use App\Traits\DatatableTrait;

class IndexJob extends Job
{
    use DatatableTrait;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    protected $params;

    protected $dataSelect = [
        'id',
        'first_name',
        'last_name',
        'email',
        'company',
        'message',
    ];

    public function __construct(array $params)
    {
        parent::__construct();
        $this->params = $params;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle(ContactRepository $repository)
    {
        $datatables = DataTables::of($repository
            ->scopeDatatables($this->dataSelect));

        $this->filterDatatable($datatables, $this->params);
        $datatables->addColumn('actions', function ($item) {
            $actions['delete'] = [
                'uri' => route(sprintf('%shome.destroy', $this->prefix), $item->id),
                'label' => __('repositories.title.delete'),
            ];

            return $actions;
        });

        return $datatables->make(true);
    }
}
