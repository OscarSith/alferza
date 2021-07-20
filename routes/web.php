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
Route::post('enviar-cv', 'WelcomeController@sendCV')->name('sendCV');

Route::get('nosotros', 'WelcomeController@aboutUs')->name('about');
Route::get('nuestros-asesores', 'WelcomeController@consultants')->name('consultants');
Route::get('proyectos/{status?}', 'WelcomeController@projects')->name('projects');
Route::get('calculadora', 'WelcomeController@calculator')->name('calculator');
Route::get('calculadora/descargar', 'WelcomeController@exportarExcel')->name('exportarExcel');
Route::post('calculadora', 'WelcomeController@calculator')->name('calculatorPost');

Route::get('invierte', 'WelcomeController@invierte')->name('invierte');
Route::post('enviar-form-invierte', 'WelcomeController@sendInvierte')->name('sendInvierte');

Route::get('blog', 'WelcomeController@blog')->name('blog');
Route::get('blog/{blog:url_slug}', 'WelcomeController@blogDetail')->name('blogDetail');

Route::get('politicas-de-privacidad', 'WelcomeController@politicas')->name('politicas');
Route::get('contacto', 'WelcomeController@contacto')->name('contacto');
Route::post('enviar-contacto', 'WelcomeController@sendContact')->name('sendContact');

Route::get('libro-de-reclamaciones', 'WelcomeController@libroReclamaciones')->name('libroReclamaciones');
Route::post('enviar-reclamo', 'WelcomeController@sendLibroReclamaciones')->name('sendLibroReclamaciones');
Route::get('landing-page', 'WelcomeController@landing')->name('landing');
Route::post('enviar-formulario-landing', 'WelcomeController@sendLandingForm')->name('landingForm');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
