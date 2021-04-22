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

Route::get('/index', function () {
    return view('welcome');
});

 Route::get('/', function () {
    return view('project');
});
Route::get('/greeting', function(){
	return view('landing');
});
Route::get('/','Personalsite@form');
Route::post('/submitform', 'Personalsite@submit_details');
//Route::any('/submitform', 'Personalsite@submit_details');
Auth::routes();

Route::get('/homme', 'HomeController@index')->name('home');
Route::any('/', 'HomeController@create');
Route::get('/msg', 'HomeController@getmsg');
