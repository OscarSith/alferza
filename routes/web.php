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
Route::get('proyectos/{status?}', 'WelcomeController@projects')->name('projects');
Route::get('calculadora', 'WelcomeController@calculator')->name('calculator');
Route::post('calculadora', 'WelcomeController@calculator')->name('calculatorPost');
Route::get('invierte', 'WelcomeController@invierte')->name('invierte');
Route::get('blog', 'WelcomeController@blog')->name('blog');
Route::get('blog/{blog:url_slug}', 'WelcomeController@blogDetail')->name('blogDetail');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
