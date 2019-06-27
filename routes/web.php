<?php
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
    return view('web.institucion');
})->name('institucion');

Route::get('/organizacion', function () {
    return view('web.organizacion');
})->name('organizacion');

Route::get('/contacto', function () {
    return view('web.contacto');
})->name('contacto');
//Enlace Multimedia
Route::get('/galeria',	'Web\PageController@gallery')->name('galeria');

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

Route::get('inventarios/ver/pdf',		'Inventario\pdfController@pdf')->name('pdf');
Route::get('inventarios/desargar/pdf',	'Inventario\pdfController@descarga')
->name('descarga.pdf');