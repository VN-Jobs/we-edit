<?php

namespace App\Repositories;

use App\Contracts\Repositories\ContactRepository;
use App\Eloquent\Contact;

class ContactRepositoryEloquent extends AbstractRepositoryEloquent implements ContactRepository
{
    public function __construct(Contact $contact)
    {
        parent::__construct($contact);
    }

    public function scopeDatatables($columns = ['*'], $with = [])
    {
        return $this->model
            ->select($columns)
            ->with($with);
    }
}
