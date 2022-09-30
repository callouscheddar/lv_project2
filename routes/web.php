<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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

// Show home page
Route::get('/', function () {
    return view('home');
});

Route::get('/posts/create', [PostController::class, 'create']);

Route::post('/posts/create', [PostController::class, 'store']);

Route::get('/posts/{id}', [PostController::class, 'show']);

Route::get('/posts', [PostController::class, 'index']);


Route::get('/login', function() {
    return view('login');
});

Route::get('/register', function() {
    return view('register');
});