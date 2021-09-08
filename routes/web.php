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

Route::middleware('auth')->prefix('admin')->group(function($route) {
    $route->get('/', 'HomeController@index')->name('home');

    $route->put('page/{page}/update', 'PageController@update')->name('pageUpdate');

    // Blogs
    $route->get('blogs', 'BlogController@index')->name('blogsIndex');
    $route->get('blog', 'BlogController@create')->name('blogCreate');
    $route->get('{blog}/blog', 'BlogController@edit')->name('blogEdit');
    $route->put('blog/{id}/update', 'BlogController@update')->name('blogUpdate');
    $route->post('blog', 'BlogController@store')->name('blogStore');
    $route->post('blog/upload/picture', 'BlogController@uploadImage')->name('uploadImage');
    $route->post('blog/upload/picture/delete', 'BlogController@deleteUploadImage')->name('deleteUploadImage');

    // Testimonios
    $route->get('testimonios', 'TestimonioController@index')->name('testimonioIndex');
    $route->get('testimonio/view', 'TestimonioController@view')->name('testimonioView');
    $route->get('testimonios/{testimonio}/edit', 'TestimonioController@edit')->name('testimonioEdit');
    $route->put('testimonios/{id}/update', 'TestimonioController@update')->name('testimonioUpdate');
    $route->post('testimonios/store', 'TestimonioController@store')->name('testimonioStore');

    // Asesores
    $route->get('asesores', 'ConsultantController@index')->name('consultantIndex');
    $route->get('asesores/create', 'ConsultantController@create')->name('consulantCreate');
    $route->post('asesores/store', 'ConsultantController@store')->name('consultantStore');
    $route->get('asesor/{consultant}/edit', 'ConsultantController@edit')->name('consultantEdit');
    $route->put('asesor/{consultant}/update', 'ConsultantController@update')->name('consultantUpdate');

    // Proyectos
    $route->get('proyectos', 'ProjectController@index')->name('projectsIndex');
    $route->get('proyecto', 'ProjectController@create')->name('projectCreate');
    $route->post('proyecto', 'ProjectController@store')->name('projectStore');
    $route->get('proyecto/{project}/edit', 'ProjectController@edit')->name('projectEdit');
    $route->put('proyecto/{project}/update', 'ProjectController@update')->name('projectUpdate');
    $route->put('proyecto/change-vendidos/{id}', 'ProjectController@setToVendidos')->name('setToVendidos');
    $route->put('proyecto/change-status', 'ProjectController@changeStatus')->name('changeStatus');

    // Proyectos imagenes
    $route->get('proyecto/{id}/pictures', 'PicturesController@index')->name('picturesIndex');
    $route->post('proyecto/picture', 'PicturesController@store')->name('pictureStore');
    $route->delete('proyecto/picture/{pictures}/delete', 'PicturesController@destroy')->name('pictureDestroy');

    // Proyectos planos
    $route->get('proyecto/{id}/planos', 'FlatsController@index')->name('flatsIndex');
    $route->get('proyecto/{id}/plano/{flats}/view', 'FlatsController@edit')->name('flatsEdit');
    $route->put('proyecto/{id}/plano/{flats}/update', 'FlatsController@update')->name('flatUpdate');
    $route->post('proyecto/plano', 'FlatsController@store')->name('flatStore');
    $route->delete('proyecto/{flats}/plano', 'FlatsController@destroy')->name('flatDestroy');

    // Proyectos beneficios
    $route->get('proyecto/{id}/beneficios', 'BenefitController@index')->name('benefitsIndex');
    $route->post('proyecto/{id}/beneficio', 'BenefitController@store')->name('benefitStore');
    $route->delete('proyecto/{id}/beneficio/{benefit}', 'BenefitController@destroy')->name('benefitDestroy');
});
