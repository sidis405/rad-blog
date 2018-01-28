<?php

namespace App\Http\Controllers;

use App\Tag;

class TagController extends Controller
{
    public function show(Tag $tag)
    {
        $tag = $tag->load('posts.user', 'posts.tags', 'posts.category');

        return view('tags.show', compact('tag'));
    }
}
