<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;

class PostsController extends Controller
{
    //
    public function index(){
        $list = Post::get();
        return view('posts.index');
    }

    public function added(Request $request)
    {
        $request->validate([
            'username' => ['required', 'min:2', 'max:12',],
            'mail' => ['required', 'min:5', 'max:40', 'unique:users,mail', 'email',],
            'password' => ['required', 'min:8', 'max:20', 'alpha_num', 'confirmed:password'],
            'password_confirmation' => ['required', 'alpha_num', 'min:8', 'max:20']
        ]);
    }
}
