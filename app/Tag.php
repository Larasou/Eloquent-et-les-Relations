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
            $model->posts()->detach();
        });
    }

    public function posts() 
    {
        return $this->belongsToMany(Post::class);
    }
}
