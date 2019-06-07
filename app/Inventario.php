<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inventario extends Model
{
    protected $fillable = [
		'articulo_id',
		'cantidad',
		'codigo',
		'grupo_id',
		'independiente',
		'serial',
		'modelo',
		'marca_id',
		'color_id',
		'incorp',
		'desincorp',
		'observacion',
		'user_id', 
		'departamento_id'
	];

	/*
	Un inventario tiene un solo articulo, grupo, marca, color... por registro
	
	*/
	public function articulo()
	{
		return $this->belongsTo(Articulo::class);
	}

	public function grupo()
	{
		return $this->belongsTo(Grupo::class);
	}

	public function marca()
	{
		return $this->belongsTo(Marca::class);
	}

	public function color()
	{
		return $this->belongsTo(Color::class);
	}

	public function departamento()
	{
		return $this->belongsTo(Color::class);
	}
}
