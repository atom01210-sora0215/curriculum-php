<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Post; 
use App\User; 

class PostController extends Controller
{
    public function add()
    {
        //web.php, post/create, @add
        return view('post.create');
    }

    public function create(Request $request)
    {
        // Varidationを行う
        $this->validate($request, Post::$rules);

        $post = new Post;
        $form = $request->all();
        unset($form['_token']);

        // データベースに保存
        $post->fill($form);
        $post->save();

        return redirect('post/create');
    }

    public function index(Request $request)
    {
        $user = User::all();
        $post = Post::orderBy('created_at', 'desc')->get();
        return view('post.create', ['posts'=>$post, 'users'=>$user]);
    }
}
