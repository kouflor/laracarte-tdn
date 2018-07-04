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

Route::get('/', [
		'as' => 'root_path',
		'uses' => 'PagesController@home'

	]);



Route::get('/about', [
		'as' => 'about_path',
		'uses' => 'PagesController@about'

	]);


/** creation d'une route pour la page contact
Route::get('/contact', [
		'as' => 'contact_path',
		'uses' => 'PagesController@contact'

	]);
	*/


//creation d'une route pour la page contact avec creation de 1 controller et un dossier messages dans views
Route::get('/contact', [
		'as' => 'contact_path',
		'uses' => 'contactsController@create'

	]);
