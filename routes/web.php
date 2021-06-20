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

Route::get('/', function () {
    return view('welcome');
});


Route::namespace('App\Http\Controllers\Backend')->group(function (){

    Route::prefix('admin')->group(function (){

        Route::get('/','DefaultController@index')->name('admin.index');

        Route::get('/newperson','DefaultController@newperson')->name('admin.newperson');
        Route::resource('person','PersonController');

    });

});



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
