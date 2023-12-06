<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index(){
        return view('blog',[
            "title" => "Blog",
            "post" => Post::all(),
            
        ]);
    }

    public function show(Post $posts){
        return view('post', [
            "title"=> "Single post",
            "post" => $posts,
          ]) ; 
    }
//     public function search(Request $request)
// {
//   $search = $request->input('search');

//   $posts = Post::where('title', '%' . $search . '%')->get();

//   return view('blog ', [
//     'title' => $pos,
//     'posts' => $posts,
//   ]);
// }

}