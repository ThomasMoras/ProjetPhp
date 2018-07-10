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
    'name', 'prenom', 'description', 'departement', 'email', 'password',
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
        return  $this->hasOne(Domaine::class);
    }

//    public function Contrat(){
//        return  $this->hasOne(Contrat::class);
//    }

//    public function competences()
//    {
//        return $this->belongsToMany('App\Competence');
//    }

//    public function competences()
//    {
//        return $this->belongsToMany(Competence::class);
//    }
}
