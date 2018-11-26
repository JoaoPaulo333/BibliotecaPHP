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
    return redirect('login');
});

$this->group(['middleware' => 'auth'],function(){
    $this->get('autor','AutorController@index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
