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

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::group(['namespace'=>'WordList'],function (){

});

Auth::routes();
Route::get('/home', 'HomeController@index');
Route::group(['prefix'=>'word','namespace'=>'WordList'],function (){
    Route::get('/rlist/{grade}','WordListController@getRandomWord');
    Route::get('/list/{grade}','WordListController@getWordCount');
    Route::get('/list/{grade}/detail','WordListController@getWordList');
});
