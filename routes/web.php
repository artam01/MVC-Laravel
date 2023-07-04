<?php

namespace App\Http\Controllers;

use App\Models\Post;
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
    $posts = Post::all(); // Use the Post model to retrieve all posts

    return view('posts', ['posts' => $posts]);
});

Route::get('/posts', 'App\Http\Controllers\PostController@index');
//Route::get('/posts/{post}', 'App\Http\Controllers\PostController@show')->name('posts.show');
Route::get('/posts/{post}', [PostController::class, 'show'])->name('show');
