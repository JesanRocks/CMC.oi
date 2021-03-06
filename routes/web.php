<?php

/*Clases del controlador*/
use App\Exports\UsersExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;
//
Route::redirect('/','inicio');

Route::get('/sistema', function () {
    return view('sistema');
})->name('sistema');

Auth::routes();
//Blog: Vistas para visitantes
Route::get('/inicio',				'Web\PageController@blog')->name('blog');
Route::get('/publicaciones',	'Web\PageController@publicaciones')->name('publicaciones');

Route::get('/buscar',			'Web\PageController@search')->name('search');

Route::get('/entrada/{slug}',	'Web\PageController@post')->name('post');
Route::get('/categoria/{slug}', 'Web\PageController@category')->name('category');
Route::get('/etiqueta/{slug}',	'Web\PageController@tag')->name('tag');
/*Control de usuarios*/
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
//Descarga de documentos
Route::get('inventarios/ver/pdf',		'Inventario\pdfController@pdf')->name('pdf');
Route::get('inventarios/desargar/pdf',	'Inventario\pdfController@descarga')->name('descarga.pdf');

Route::get('etiquetas',		'Inventario\pdfController@etiquetas')->name('etiquetas');
#Route::get('inventarios/etiquetas/desargar',	'Inventario\pdfController@descarga')->name('descarga.etiquetas');

//Route::get('inventarios/desargar/excel','Inventario\excelController@excel')->name('excel');
// Route::get('inventarios/desargar/excel', function (){
// 	return Excel::download(new UsersExport, 'INVENTARIO DEL CONCEJO MUNICIPAL.xlsx');	
// });