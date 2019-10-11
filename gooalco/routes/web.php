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
Route::get('/admin', function () {

    return view('admin.welcom');
});

Auth::routes(['verify' => true]);

Route::get('/lang/{local}', 'HomeController@lang');


Route::resource('/admin/posts', 'PostController');
Route::get('/post/{slug}', 'PostController@show');

Route::resource('/admin/slider', 'SliderController');
Route::resource('/admin/menus', 'MenuController');
Route::resource('/admin/submenus', 'SubMenuController');
Route::resource('/admin/pages', 'PageController');
Route::get('/pages/{slug}', 'PageController@show');
Route::resource('/admin/options', 'OptionController');
Route::resource('/admin/price', 'PriceController');
Route::resource('/admin/works', 'WorkController');
Route::resource('/admin/categorys', 'CategorieWorkController');
Route::resource('/contact', 'ContactController');
Route::get('/admin/contact', 'ContactController@adminIndex');
Route::get('/admin/contact/{id}', 'ContactController@show');

Route::get('/admin/sendmail/{id}', 'ContactController@sendEmailById');

Route::get('/admin/email', 'MailController@home');
Route::get('/admin/email/{$id}', 'MailController@sendEmailById');
Route::post('/admin/sendemail', 'MailController@sendEmail');


