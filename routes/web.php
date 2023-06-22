<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('home.index');
});

Route::get('/explore', function () {
    return view('explore.index');
});

Route::get('/article', function () {
    return view('article.index');
});

Route::get('/article1', function () {
    return view('article.detail.article1');
});

Route::get('/game', function () {
    return view('game.index');
});

Route::get('/game1', function () {
    return view('game.game1');
});
Route::get('/game2', function () {
    return view('game.game2');
});
Route::get('/game3', function () {
    return view('game.game3');
});
Route::get('/detail', function () {
    return view('detail.detail');
});
Route::get('/about', function () {
    return view('about.index');
});