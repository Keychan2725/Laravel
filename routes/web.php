<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Models\Category;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome',[
       "title" => "Home"
        
    ]);
});


Route::get('/about', function () {
  return view('about',[
      "title" => "About"    
      
  ]);
});
Route::get('/posts',  [PostController:: class ,'index']);

Route::get('/posts/{posts:slug}',  [PostController:: class , 'show']);

Route::get('/categories', function(){
  return view('categories', [
    'title' => 'Post Categories',
    'categories' =>  Category::all()
  ]);

});

Route::get('/categories/{category:slug}' , function(Category $category){
  return view('category', [
    'title' => $category->name,
    'posts' => $category->posts,
    'category'=> $category->name
  ]);
});