<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'slug', 'content',
    ];

    public function scopeWhereSlug($query, $slug)
    {
        return $query->where('slug', $slug);
    }
}