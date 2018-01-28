<?php

namespace App;

use Backpack\CRUD\CrudTrait;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use CrudTrait;

    protected $guarded = [];

    public function posts()
    {
        return $this->hasMany(Post::class);
    }
}
