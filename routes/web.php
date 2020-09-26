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

Route::get('/admin', function () {
    return view('authentification');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::namespace('Admin')->prefix('admin')->name('admin.')->middleware('can:manage-users')->group(function(){
    Route::resource('users','UsersController');
});


Route::namespace('Admin')->prefix('admin')->name('admin.')->middleware('can:manage-users')->group(function(){
     Route::resource('documents','DocumentsController');
});





Route::get('/', function () {
    return view('index1');
});
Route::get('/accueil', function () {
    return view('accueil');
})->name('accueil');

Route::get('/consultation', function () {
    return view('consultation');
})->name('consultation');

Route::get('/psychotheque', function () {
    return view('psychotheque');
})->name('psychotheque');

Route::get('/groupe', function () {
    return view('groupe');
})->name('groupe');

Route::get('/inscription', function () {
    return view('inscription');
})->name('inscription');