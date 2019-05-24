<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Articulo extends Model
{
    protected $fillable = [
		'nombre','dsc','user_id'
	];

    public function user()
    {
    	return $this->belongsTo(User::class);
    }
    /*
	Un articulo pertenece a muchos inventarios
    */
	public function inventarios()
	{
		return $this->hasMany(Inventario::class);
	}
}
