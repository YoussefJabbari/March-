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

Route::get('/', 'HomeController@index')->name('Calendar');
Route::post('/lundi', 'HomeController@lundi')->name('Lundi');
Route::post('/mardi', 'HomeController@mardi')->name('Mardi');
Route::post('/mercredi', 'HomeController@mercredi')->name('Mercredi');
Route::post('/jeudi', 'HomeController@jeudi')->name('Jeudi');
Route::post('/vendredi', 'HomeController@vendredi')->name('Vendredi');
Route::post('/samedi', 'HomeController@samedi')->name('Samedi');
Route::post('/dimanche', 'HomeController@dimanche')->name('Dimanche');
Route::get('/expired', 'HomeController@expired')->name('expired');
Route::get('/reset', 'HomeController@reset')->name('reset');
