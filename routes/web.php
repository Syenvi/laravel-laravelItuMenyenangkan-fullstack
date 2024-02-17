<?php

use App\Http\Controllers\PostController;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Route;

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
    return view('home',[
        "title" => "Home",
        "active"=>'home',
    ]);
});

Route::get('/about', function () {
    return view('about',[
        "title" => "About",
        "active"=>'about',
        "name" => "Syahdin Raditya Hafid",
        "email"=> "syahdinradityahafid@gmail.com",
        "image" => "img.jpeg"
    ]);
});




Route::get('/posts',[PostController::class,'index']);
Route::get('/posts/{post:slug}',[PostController::class,'show']);

// Route::group(['prefix' => 'posts'], function(){
//     Route::get('/hehe',function (){
//         return 'hehe';
//     });

// });

// Route::prefix('posts')->group(function () {
//     Route::prefix('')
//     Route::get('/',[PostController::class,'index']);
//     Route::get('/{post:slug}',[PostController::class,'show']);
//     Route::get('/hehe', function (){
//         return 'hehe';
//     });
// });

// Route::resource('posts', PostController::class);
Route::get('/posts/hehe', function (){
            return 'hehe';
        });


Route::get('/categories',function (){
    return view('categories',[
        'title'=>'Post Categories',
        "active"=>'categories',
        'categories'=> Category::all()
    ]);
});
// Route::get('/categories/{category:slug}',function (Category $category){
//     return view('posts',[
//         'title'=> "Post By Category: $category->name ",
//         "active"=>'categories',
//         'posts'=> $category->posts->load('author','category'),
//     ]);
// });

// Route::get('/authors/{author:username}',function (User $author){
//     return view('posts',[
//         'title'=> "Post By Author : $author->name",
//         'posts'=> $author->posts->load('author','category'),
//     ]);
// });
