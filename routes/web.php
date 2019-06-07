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

Auth::routes();
//Blog: Vistas para visitantes
Route::get('/blog',				'Web\PageController@blog')->name('blog');
Route::get('/entrada/{slug}',	'Web\PageController@post')->name('post');
Route::get('/categoria/{slug}', 'Web\PageController@category')->name('category');
Route::get('/etiqueta/{slug}',	'Web\PageController@tag')->name('tag');
/*Routas para contenido estático
Route::get('/reseña', function () {
    return view('reseña');
})->name('reseña');*/
Route::get('/quienes-somos', function () {
    return view('institucion');
})->name('institucion');

Route::get('/organizacion', function () {
    return view('organizacion');
})->name('organizacion');

Route::get('/contacto', function () {
    return view('contacto');
})->name('contacto');
//Enlace Multimedia
Route::get('/galeria', function () {
    return view('galeria');
})->name('galeria');
// Route::get('/videos', function () {
//     return view('videos');
// })->name('videos');
/*Administración: menú para usuarios logueados
Control de usuarios*/
Route::resource('usuarios',		'UsuarioController');
//Control de publicaciones del Blog 
Route::resource('tags',			'Admin\TagController');
Route::resource('categories',	'Admin\CategoryController');
Route::resource('posts',		'Admin\PostController');
//Control de inventario
Route::resource('grupos',			'Inventario\GrupoController');
Route::resource('subgrupos',		'Inventario\SubgrupoController');
Route::resource('articulos',		'Inventario\ArticuloController');
Route::resource('marcas',			'Inventario\MarcaController');
Route::resource('colores',			'Inventario\ColorController');
Route::resource('departamentos',	'Inventario\DepartamentoController');

Route::resource('inventarios',		'Inventario\InventarioController');