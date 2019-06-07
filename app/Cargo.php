<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cargo extends Model
{
    protected $fillable = ['dsc'];

    public function usuarios()
	{
		return $this->hasMany(User::class);
	}
}
