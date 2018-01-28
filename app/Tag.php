<?php

namespace App;

use Backpack\CRUD\CrudTrait;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use CrudTrait;
    protected $guarded = [];


    public function posts()
    {
        return $this->belongsToMany(Post::class);
    }
}
