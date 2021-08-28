<?php
use App\Models\Post;
use App\Models\User;
use App\Models\Category;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProductController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
   return view('home', [
       "title" => "Home",
       'active' => 'home',
   ]);
});

Route::get('/about', function () {
    return view('about',[
        "title" => "About",
        'active' => 'about',
        "name" => "ahmad",
        "email" => "ahmadpato@gmail.com",
        "image" => "gambar.jpg"
    ]);
});

Route::get('/blog',[PostController::class,'index']);

Route::get('/posts/{post:slug}',[PostController::class,'show']);

Route::get('/categories', function(){
    return view('categories', [
        'title' => 'Post Categories',
        'active' => 'categories',
        'categories' => Category::all()
    ]);
});

Route::get('/product', [ProductController::class, 'index']);
