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
    return view('welcome');
});

// TOPページの表示
Route::get("top","ViewController@top");

// プロフィールページの表示
Route::get("profile","ViewController@profile");

// ヒストリーページの表示
Route::get("history","ViewController@history");

// 制作物ページの表示
Route::get("work","ViewController@work");
