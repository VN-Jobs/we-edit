<?php

namespace App\Eloquent;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $fillable = [
        'name',
        'url',
        'sort',
        'parent_id',
    ];

    public function children()
    {
        return $this->hasMany(self::class, 'parent_id')->orderBy('sort');
    }
    public function parent()
    {
        return $this->belongsTo(self::class, 'parent_id');
    }
}
