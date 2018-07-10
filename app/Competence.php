<?php

namespace projetPhp;

use Illuminate\Database\Eloquent\Model;

class Competence extends Model
{

    protected $fillable = [
        'nom'
    ];


    public function competences()
    {
        return $this->belongsToMany(User::class);
    }
}
