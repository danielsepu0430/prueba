<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;

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
    return view('welcome');
});


Route::get('/post/create', [PostsController::class, 'create']);
Route::get('/post/index', [PostsController::class, 'index']);
Route::post('/post/store', [PostsController::class, 'store']);
Route::get('/post/show', [PostsController::class, 'show']);
Route::get('/post/edit', [PostsController::class, 'edit']);
Route::get('/post/update', [PostsController::class, 'update']);
Route::get('/post/destroy', [PostsController::class, 'destroy']);
