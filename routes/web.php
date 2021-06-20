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
    return view('backend.login');
});


Route::namespace('App\Http\Controllers\Backend')->group(function (){

    Route::prefix('admin')->group(function (){

        Route::get('/login','DefaultController@login')->name('admin.login');
        Route::post('/login','DefaultController@authenticate')->name('admin.authenticate');
        Route::get('/logout','DefaultController@logout')->name('admin.logout');

    });

    Route::middleware(['auth'])->group(function () {
        Route::prefix('admin')->group(function () {

            Route::get('/', 'DefaultController@index')->name('admin.index');

            Route::get('/newperson', 'DefaultController@newperson')->name('admin.newperson');
            Route::resource('person', 'PersonController');

            Route::resource('user', 'UserController');

        });

    });

});



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
