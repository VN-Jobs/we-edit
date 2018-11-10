<?php

namespace App\Repositories;

use App\Contracts\Repositories\CollectionRepository;
use App\Eloquent\Collection;

class CollectionRepositoryEloquent extends AbstractRepositoryEloquent implements CollectionRepository
{
    public function __construct(Collection $collection)
    {
        parent::__construct($collection);
    }
}
