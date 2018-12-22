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

error_reporting(E_ALL);
ini_set('display_errors', 'On');

Route::get('/', 'IndexController@index');

//Route::match(['get', 'post'], '/botman', 'BotManController@handle');
//Route::get('/botman/tinker', 'BotManController@tinker');
