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
Route::post('/', 'HomeController@lundi')->name('Lundi');
Route::post('/', 'HomeController@mardi')->name('Mardi');
Route::post('/', 'HomeController@mercredi')->name('Mercredi');
Route::post('/', 'HomeController@jeudi')->name('Jeudi');
Route::post('/', 'HomeController@vendredi')->name('Vendredi');
Route::post('/', 'HomeController@samedi')->name('Samedi');
Route::post('/', 'HomeController@dimanche')->name('Dimanche');
