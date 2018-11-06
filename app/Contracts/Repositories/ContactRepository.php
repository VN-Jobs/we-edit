<?php

namespace App\Contracts\Repositories;

interface ContactRepository
{
    public function scopeDatatables($columns = ['*'], $with = []);
}
