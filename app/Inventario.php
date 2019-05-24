<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inventario extends Model
{
    protected $fillable = [
		'articulo_id','cantidad','codigo','grupo','independiente','serial','modelo','marca','color','incorp','desincorp','observacion'
	];

	/*
	Un inventario tiene un solo articulo, grupo, marca, color... por registro
	
	*/
	public function articulo()
	{
		return $this->belongsTo(Articulo::class);
	}


	// public function grupo()
	// {
	// 	return $this->belongsTo(Grupo::class);
	// }

	// public function marca()
	// {
	// 	return $this->belongsTo(Marca::class);
	// }

	// public function color()
	// {
	// 	return $this->belongsTo(Color::class);
	// }
}
