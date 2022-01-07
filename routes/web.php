<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
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



Route::get('/', [HomeController::class, 'show']);
Route::get('/posts', [PostController::class, 'postList']);
Route::get('/posts/{id}', [PostController::class, 'stepList']);
Route::get('/about', [PostController::class, 'show']);

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

