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
// Homepage Route
//Route::group(['middleware' => ['web', 'checkblocked']], function () {
//    Route::get('/', 'App\Http\Controllers\WelcomeController@welcome')->name('welcome');
//    Route::get('/terms', 'App\Http\Controllers\TermsController@terms')->name('terms');
//});

Route::group([],function(){
    Route::get("/",'App\Http\Controllers\WelcomeController@index');
});
//Route::get('/', function () {
//    return view('welcome');
//});
