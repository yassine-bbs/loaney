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


Route::get('/', 'HomeController@index')->name('home');
Route::get('concept', 'HomeController@concept')->name('concept');
Route::get('partenaires','HomeController@partenaire')-> name('partenaires');
Route::get('emprunt','HomeController@emprunt')-> name('emprunt');
Route::get('contact', 'HomeController@contact')->name('contact');
Route::get('mentions', 'HomeController@mentions')->name('mentions');
Route::get('pret', 'HomeController@pret')->name('pret');




