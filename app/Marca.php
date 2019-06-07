<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Marca extends Model
{
    protected $fillable = [
		'nombre','dsc'
	];

	public function inventarios()
	{
		return $this->hasMany(Inventario::class);
	}
}
