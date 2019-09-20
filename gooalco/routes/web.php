<?php

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

use Illuminate\Support\Facades\Route;

Route::get('/', 'HomeController@index')->name('home');
// Route::get('/', function () {
//     return view('home');
// });
Route::get('/admin', function () {
    return view('admin.welcom');
});

Auth::routes(['verify' => true]);

Route::get('/lang/{local}', 'HomeController@lang');

Route::resource('/admin/posts', 'PostController');
Route::get('/post/{id}', 'HomeController@show');
Route::resource('/admin/slider', 'SliderController');
Route::get('/admin2', function () {
    return view('admin.indexpanel');
});
Route::get('/admin2/a', function () {
    return view('admin2.wecom');
});

