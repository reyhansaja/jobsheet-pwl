<?php

use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ArticleController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PhotoController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/world', function () {
   return 'World';
});

Route::get('/welcome', function () {
    return 'Selamat Datang';
});

Route::get('/user/{name}', function ($name) {
return 'Nama saya '.$name;
});

Route::get('/posts/{post}/comments/{comment}', function ($postId, $commentId) {
    return 'Pos ke-'.$postId." Komentar ke-: ".$commentId;
});

Route::get('/articles/{id}', function ($Id){
    return 'Halaman artikel dengan ID '.$Id;
});

Route::get('/user/{name?}', function ($name="John") {
    return 'Nama saya '.$name;
});

Route::get('/hello', [WelcomeController::class,'hello']);
Route::get('/index', [HomeController::class,'index']);
Route::get('/about', [AboutController::class,'about']);
Route::get('/articles/{id}', [ArticleController::class,'articles']);
Route::resource('photos', PhotoController::class);
Route::resource('photos', PhotoController::class)->only([
    'index', 'show'
]);
Route::resource('photos', PhotoController::class)->except([
    'create', 'store', 'update', 'destroy'
]);
Route::get('/greeting', [WelcomeController::class, 'greeting']);