<?php

namespace App\Jobs\Contact;

use App\Jobs\Job;
use App\Contracts\Repositories\ContactRepository;

class UserStoreJob extends Job
{
    /**
     * Create a new job instance.
     *
     * @return void
     */
    protected $params;
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'company',
        'message',
    ];

    public function __construct(array $params)
    {
        $this->params = $params;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle(ContactRepository $repository)
    {
        $data = array_only($this->params, $this->fillable);

        return $repository->create($data);
    }
}
