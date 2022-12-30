<?php

use App\Http\Controllers\FormController;
use Illuminate\Support\Facades\Route;
use App\Models\Post;

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

/*
Route::get('/demo', function () {
    return "Hello, This is my world!!!";
});
*/

Route::get('/', function () {

    $posts = Post::all();
    return view('posts', [
        'posts' => $posts
    ]);
});

Route::get('posts/{post}', function ($slug) {

    //find the post by its slug and pass it to the view called "post"
    return view('post', [
        'post' => Post::find($slug)
    ]);
})->where('post', '[A-z_\-]+');

Route::get('/form', [FormController::class, 'index']);

Route::post('/form', [FormController::class, 'postForm']);