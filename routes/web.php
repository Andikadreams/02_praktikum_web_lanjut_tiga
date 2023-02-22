<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProgramController;


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
// NOMOR 1
Route::get('/home', [HomeController::class, 'homepage']);
// http://127.0.0.1:8000/home

// NOMOR 2
Route::prefix('category')->group(function () {
    Route::get('/marbel-edu-games', [ProductController::class, 'marbeledu']);
    // http://127.0.0.1:8000/category/marbel-edu-games
    Route::get('/marbel-and-friend-kids-games', [ProductController::class, 'marbelandfriend']);
    // http://127.0.0.1:8000/category/marbel-and-friend-kids-games
    Route::get('/riri-story-books', [ProductController::class, 'marbelriri']);
    // http://127.0.0.1:8000/category/riri-story-books
    Route::get('kolak-kids-songs', [ProductController::class, 'kolakkids']);
    // http://127.0.0.1:8000/category/kolak-kids-songs
});

// NOMOR 3
Route::get('/news/{id}', [NewsController::class, 'news']);
// http://127.0.0.1:8000/news/educa-studio-berbagi-untuk-warga-sekitar-terdampak-covid-19

Route::get('/news', [NewsController::class, 'news2']);
// http://127.0.0.1:8000/news


// NOMOR 4
Route::prefix('program')->group(function () {
    Route::get('/karir', [ProgramController::class, 'karir']);
    // http://127.0.0.1:8000/program/karir
    Route::get('/magang', [ProgramController::class, 'magang']);
    // http://127.0.0.1:8000/program/magang
    Route::get('/kunjungan-industri', [ProgramController::class, 'kunjungan_industri']);
    // http://127.0.0.1:8000/program/kunjungan-industri
});

// NOMOR 5
// http://127.0.0.1:8000/about-us
Route::get('/about-us', [AboutController::class, 'about']);

// NOMOR 6
// http://127.0.0.1:8000/contact-us
Route::resource('/contact-us', ContactController::class);
