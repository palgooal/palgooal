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



Route::get('/', 'HomeController@index')->name('home');
// Route::get('/', function () {
//     return view('home');
// });
// Route::get('/admin', function () {

//     return view('admin.welcom');
// });

Route::get('/admin', 'AdminController@index')->middleware('auth');

Auth::routes(['verify' => true]);

Route::get('/lang/{local}', 'HomeController@lang');


Route::resource('/admin/posts', 'PostController')->middleware('auth');
Route::get('/post/{slug}', 'PostController@show');

Route::resource('/admin/slider', 'SliderController')->middleware('auth');
Route::resource('/admin/menus', 'MenuController')->middleware('auth');
Route::resource('/admin/submenus', 'SubMenuController')->middleware('auth');
Route::resource('/admin/pages', 'PageController')->middleware('auth');
Route::get('/pages/{slug}', 'PageController@show');
Route::resource('/admin/options', 'OptionController')->middleware('auth');
Route::resource('/admin/price', 'PriceController')->middleware('auth');
Route::resource('/admin/works', 'WorkController')->middleware('auth');
Route::resource('/admin/categorys', 'CategorieWorkController')->middleware('auth');
Route::resource('/contact', 'ContactController');
Route::get('/admin/contact', 'ContactController@adminIndex')->middleware('auth');
Route::get('/admin/contact/{id}', 'ContactController@show')->middleware('auth');

Route::get('/admin/sendmail/{id}', 'ContactController@sendEmailById')->middleware('auth');

Route::get('/admin/email', 'MailController@home')->middleware('auth');
Route::get('/admin/email/{$id}', 'MailController@sendEmailById')->middleware('auth');
Route::post('/admin/sendemail', 'MailController@sendEmail')->middleware('auth');
Route::get('/Blog/', 'PostController@blog' );
Route::resource('/admin/sms', 'SmsController');




