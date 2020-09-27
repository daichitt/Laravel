<?php

use Illuminate\Support\Facades\Route;

//Authに赤線が出ていたので既述したら赤線が消えた。
use Illuminate\Support\Facades\Auth;

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
//94contactの中にすべてがあるのでprefixでまとめる
//middlewareがauth(認証されている)だったら表示する
//->name('contact.index');は無くても実行できるがViewを記述するときに楽になるので記述する
Route::group(['prefix' => 'contact', 'middleware' => 'auth'], function(){
    Route::get('index', 'ContactFormController@index')->name('contact.index');
    Route::get('create', 'ContactFormController@create')->name('contact.create');
    Route::post('store', 'ContactFormController@store')->name('contact.store');
    Route::get('show/{id}', 'ContactFormController@show')->name('contact.show');
    Route::get('edit/{id}', 'ContactFormController@edit')->name('contact.edit');
    Route::post('update/{id}', 'ContactFormController@update')->name('contact.update');
    Route::post('destroy/{id}', 'ContactFormController@destroy')->name('contact.destroy');
});

//12345qqq

//contact/indexのurlでContactFormControllerの中のindexメソッドを実行する

// Route::resource('contacts', 'ContactFormController')->only([
//     'index', 'show'
// ]);

Auth::routes();
//認証 exログインしていないと実行ができないなどの機能

Route::get('/home', 'HomeController@index')->name('home');
