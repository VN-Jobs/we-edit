<?php

namespace App\Eloquent;

use Illuminate\Database\Eloquent\Model;
use App\Traits\ModelableTrait;

class Category extends Model
{
    use ModelableTrait;

    protected $fillable = [
        'name',
        'type',
        'description',
        'locked',
    ];
}
