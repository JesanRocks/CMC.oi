<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Articulo extends Model
{
    protected $fillable = [
		'codigo','dsc','subgrupo_id'
	];

    /*
	Un articulo pertenece a muchos inventarios
    */
	public function inventarios()
	{
		return $this->hasMany(Inventario::class);
	}
}
