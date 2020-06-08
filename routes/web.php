<?php

use Illuminate\Support\Facades\Route;


#CRUD
Route::resource('/infos', 'PersonalController');
#Vista protegida user
Route::get('/', 'AdminController@index');

Route::get('login', 'Auth\LoginController@showLoginform')->name('login');
Route::post('login', 'Auth\LoginController@login')->name('login');
Route::get('/logout', 'Auth\LoginController@logout')->name('logout');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/role', 'RoleController')->names('role');

Route::get('/register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('/register', 'Auth\RegisterController@register')->name('register');	

Route::resource('nomina', 'NominaController');


