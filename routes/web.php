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

Route::redirect('/','blog');

Route::get('/sistema', function () {
    return view('sistema');
})->name('sistema');

/*Ruta en veremos... para mover el login de laravel
Route::get('/registro', function () {
    return view('auth.register');
})->name('registro');
*/
Auth::routes();
//Blog: Vistas para visitantes
Route::get('/blog',				'Web\PageController@blog')->name('blog');
Route::get('/entrada/{slug}',	'Web\PageController@post')->name('post');
Route::get('/categoria/{slug}', 'Web\PageController@category')->name('category');
Route::get('/etiqueta/{slug}',	'Web\PageController@tag')->name('tag');

//Administración: menú para usuarios logueados
//Control de publicaciones del Blog 
Route::resource('tags',			'Admin\TagController');
Route::resource('categories',	'Admin\CategoryController');
Route::resource('posts',		'Admin\PostController');
//Control de usuarios
Route::resource('usuarios',		'UsuarioController');