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

Route::get('/', 'WelcomeController@index')->name('welcome');
Route::get('/proyecto/{project:url_slug}', 'WelcomeController@detailProject')->name('detail-project');

Route::get('trabaja-con-nosotros', 'WelcomeController@workUs')->name('workWithUs');
Route::get('nosotros', 'WelcomeController@aboutUs')->name('about');
Route::get('nuestros-asesores', 'WelcomeController@consultants')->name('consultants');
Route::get('proyectos', 'WelcomeController@projects')->name('projects');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
