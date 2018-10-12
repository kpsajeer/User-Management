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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::group(['middleware' => 'App\Http\Middleware\Admin'], function()
{
    Route::get('/admin/', 'HomeController@admin');
    Route::match(['get', 'post'], '/admin/add_user', 'HomeController@addUser');
    Route::get('/admin/list_user', 'HomeController@listUsers');
    Route::get('/admin/export_template1', 'HomeController@exportTemplate1');
    Route::get('/admin/export_template2', 'HomeController@exportTemplate2');
});
