<?php

namespace App\Http\Controllers;

use App\Category;

class CategoryController extends Controller
{
    public function index()
    {
        return Category::orderBy('name', 'ASC')->get();
    }

    public function show(Category $category)
    {
        $category = $category->load('posts.user', 'posts.tags', 'posts.category');

        return view('category.show', compact('category'));
    }
}
