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
    return view('index');
 });


//Auth::routes(['verify' => true]);

//Route::group([ 'middleware'=>'auth'], function () {


    //client route
    Route::get('/clients', 'ClientController@index')->name('client.index');
    Route::get('/client/edit/{id}', 'ClientController@edit')->name('client.edit');
    Route::post('/client/update/{id}', 'ClientController@update')->name('client.update');
    Route::get('/client/create', 'ClientController@create')->name('client.create');
    Route::post('/client/store', 'ClientController@store')->name('client.store');
    Route::get('/client/delete/{id}', 'ClientController@destroy')->name('client.delete');

    //fournisseur route
    Route::get('/fournisseurs', 'FournisseurController@index')->name('fournisseur.index');
    Route::get('/fournisseur/edit/{id}', 'FournisseurController@edit')->name('fournisseur.edit');
    Route::post('/fournisseur/update/{id}', 'FournisseurController@update')->name('fournisseur.update');
    Route::get('/fournisseur/create', 'FournisseurController@create')->name('fournisseur.create');
    Route::post('/fournisseur/store', 'FournisseurController@store')->name('fournisseur.store');
    Route::get('/fournisseur/delete/{id}','FournisseurController@destroy')->name('fournisseur.delete');

    //Article route
    Route::get('/article', 'ArticleController@index')->name('article.index');
    Route::get('/article/edit/{id}', 'ArticleController@edit')->name('article.edit');
    Route::post('/article/update/{id}', 'ArticleController@update')->name('article.update');
    Route::get('/article/create', 'ArticleController@create')->name('article.create');
    Route::post('/article/store', 'ArticleController@store')->name('article.store');
    Route::get('/article/delete/{id}','ArticleController@destroy')->name('article.delete');

    //Document route
    Route::get('/document', 'DocumentController@index')->name('document.index');
    Route::get('/document/edit/{id}', 'DocumentController@edit')->name('document.edit');
    Route::post('/document/update/{id}', 'DocumentController@update')->name('document.update');
    Route::get('/document/create', 'DocumentController@create')->name('document.create');
    Route::post('/document/store', 'DocumentController@store')->name('document.store');
    Route::get('/document/delete/{id}','DocumentController@destroy')->name('document.delete');



//});









