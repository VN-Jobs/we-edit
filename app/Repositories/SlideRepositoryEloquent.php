<?php

namespace App\Repositories;

use App\Contracts\Repositories\SlideRepository;
use App\Eloquent\Slide;

class SlideRepositoryEloquent extends AbstractRepositoryEloquent implements SlideRepository
{
    public function __construct(Slide $slide)
    {
        parent::__construct($slide);
    }

    public function scopeDatatables($columns = ['*'], $with = [])
    {
        return $this->model
            ->select($columns)
            ->with($with);
    }
}
