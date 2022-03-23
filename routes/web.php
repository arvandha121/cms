<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\AboutusController;
use App\Http\Controllers\PostsController;


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

//Jobsheet1
// Route::get('/welcome', function () {
//     return view('welcome');
// });

//========================================================

//Jobsheet2 Praktikum1
// Route::get('/', function () {
//     return "Hi! Selamat Datang di Website Laravel";
// });

// Route::get('/about', function () {
//     return "
//     NIM     : 2041720134
//     Nama    : Arief Nauvan Ramadha
//     Kelas   : TI - 2G";
// });

// Route::get('/articles/{id}', function ($id) {
//     return "Ini adalah halaman Artikel dengan id " . $id;
// });

//========================================================

// Jobsheet2 Praktikum2
//Nomer3
// Route::get('/', [PageController::class, 'index']);
// Route::get('/about', [PageController::class, 'about']);
// Route::get('/articles/{id}', [PageController::class, 'articles']);

// Nomer5
// Route::get('/', [HomeController::class, 'index']);
// Route::get('/about', [AboutController::class, 'about']);
// Route::get('/articles/{id}', [ArticleController::class, 'articles']);

//========================================================

// Jobsheet2 Praktikum3
// Route::get('/', [HomeController::class, 'index']);

// Route::prefix('product')->group( function () {
//     Route::get('/', [ProductController::class, 'index']);
//     Route::get('/marble-edu-games', [ProductController::class, 'marble_edu_games']);
//     Route::get('/marble-and-friends-kids-games', [ProductController::class, 'marble_and_friends_kids_games']);
//     Route::get('/riri-story-books', [ProductController::class, 'riri_story_books']);
//     Route::get('/kolak-kids-songs', [ProductController::class, 'kolak_kids_songs']);
// });

// Route::prefix('news')->group( function () {
//     Route::get('/', [NewsController::class, 'index']);
//     Route::get('/educastudio', [NewsController::class, 'news']);
//     Route::get('/educastudio-berbagi', [NewsController::class, 'berbagi']);
// });

// Route::prefix('program')->group( function () {
//     Route::get('/', [ProgramController::class, 'index']);
//     Route::get('/karir', [ProgramController::class, 'karir']);
//     Route::get('/magang', [ProgramController::class, 'magang']);
//     Route::get('/kunjungan-industri', [ProgramController::class, 'kunjungan_industri']);
// });

// Route::get('/about', [AboutusController::class, 'index']);

// Route::get('/hello', function(){
//     return view('layout.hello', ['name' => 'Nauvan']);
// });

//========================================================

// Minggu3 Praktikum1
// Route::get('/home', function(){
//     return view('home');
// });

// Route::get('/contact-us', function(){
//     return view('contact');
// });

// Route::get('/our-team', function(){
//     return view('team');
// });

// Route::get('/preview', function(){
//     return view('preview');
// });

//========================================================

//Minggu4 Prak1
// Route::get('/',[PostsController::class, 'index']);

//========================================================

//Minggu6 Prak1
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/',[PostsController::class, 'index']);
Route::get('/contact-us',[PostsController::class, 'contact']);
Route::get('/team',[PostsController::class, 'team']);
Route::get('/preview',[PostsController::class, 'preview']);
