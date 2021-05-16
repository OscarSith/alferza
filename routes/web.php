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

Route::view('trabaja-con-nosotros', 'work_with_us')->name('workWithUs');
Route::view('nosotros', 'about_us')->name('about');
Route::view('nuestros-asesores', 'consultants')->name('consultants');
Route::view('proyectos', 'projects')->name('projects');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
