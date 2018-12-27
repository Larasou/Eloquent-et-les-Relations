<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $guarded = [];

    protected static function boot()
    {
        parent::boot();

        self::deleting(function ($model) {
            //$model->posts()->detach();
        });
    }

    public function posts() 
    {
        return $this->morphedByMany(Post::class, 'taggable');
    }

    public function tutorials()
    {
        return $this->morphedByMany(Tutorial::class, 'taggable');
    }
}
