<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'cargo_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function cargo()
    {
        return $this->belongsTo(Cargo::class);
    }

    public function posts()
    {
        return $this->hasMany(Post::class);
    }
    
/* Valores para el middleware */
    public function Administrador()
    {
        if ($this->cargo->dsc == "Administrador(a)") {
            return true;
        }
        return false;
    }

    public function Escritor()
    {
        if ($this->cargo->dsc == "Escritor(a) de contenido") {
            return true;
        }
        return false;
    }

    public function Registrador()
    {
        if ($this->cargo->dsc == "Registrador(a) de inventario") {
            return true;
        }
        return false;
    }
}