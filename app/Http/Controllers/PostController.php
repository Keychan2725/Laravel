<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index(){
        return view('posts',[
            "title" => "Blog",
            "posts" => Post::all(),
            
        ]);
    }

    public function show(Post $posts){
        return view('posts', [
            "title"=> "Single post",
            "posts" => $posts,
          ]) ; 
    }


}