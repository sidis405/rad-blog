<?php

namespace App\Http\Controllers;

use App\User;

class UserController extends Controller
{
    public function show(User $user)
    {
        $user = $user->load('posts.user', 'posts.tags', 'posts.category');

        return view('users.show', compact('user'));
    }
}
