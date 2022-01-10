<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\SourceController;

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


//DOC - Named Routes - https://laravel.com/docs/8.x/routing#named-routes
Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/posts', [PostController::class, 'posts'])->name('posts');
Route::match(['get', 'post'],'/posts/create', [PostController::class, 'create'])->name('posts.create');
// DOC - Routes Parameters - https://laravel.com/docs/8.x/routing#parameters-regular-expression-constraints
Route::get('/posts/{id}', [PostController::class, 'onePost'])->name('posts.onePost');
Route::match(['get', 'post'], '/posts/{id}/update', [PostController::class, 'update'])->name('posts.update');
Route::get('/sources', [SourceController::class, 'sources'])->name('sources');

// === Example routes === //
Route::get('/test', function () {
    return 'Route Test';
});

// DOC https://laravel.com/docs/8.x/responses#view-responses
Route::get('/test/json', function () {
    return response()->json([
        'title' => 'Mon Super Titre',
        'description' => 'Ma super description'
    ]);
});

Route::get('/test/render-view', function () {
    return view('render-view');
});

