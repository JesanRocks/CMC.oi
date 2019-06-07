<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Grupo extends Model
{
    protected $fillable = [
		'codigo','dsc'
	];

	public function inventarios()
	{
		return $this->hasMany(Inventario::class);
	}

	public function subgrupos()
	{
		return $this->hasMany(Subgrupo::class);
	}
	
}
