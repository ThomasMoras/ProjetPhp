<?php

namespace projetPhp;

use Illuminate\Notifications\Notifiable;
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
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function domaine(){
        return  $this->hasOne('App\Domaine');
    }

    public function Contrat(){
        return  $this->hasOne('App\Contrat');
    }

    public function competences()
    {
        return $this->belongsToMany(Competence::class);
    }
}
