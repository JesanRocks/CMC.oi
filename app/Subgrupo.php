<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subgrupo extends Model
{
    protected $fillable = ['codigo','dsc','grupo_id'];


	public function grupo()
	{
		return $this->belongsTo(Grupo::class);
	}
}