<?php

namespace App\Eloquent;

use Illuminate\Database\Eloquent\Model;
use App\Traits\ModelableTrait;

class Category extends Model
{
    use ModelableTrait;

    protected $fillable = [
        'name',
        'ceo_title',
        'ceo_description',
        'ceo_keywords',
        'type',
        'description',
        'collection_title',
        'collection_intro',
        'locked',
    ];

    public function products()
    {
        return $this->hasMany(Product::class)
            ->orderByDesc('updated_at')
            ->where('locked', false);
    }
}
