<?php

namespace projetPhp;

use Illuminate\Database\Eloquent\Model;

class Competence extends Model
{
    public function user()
    {
        return $this->hasMany('App\User');
    }
}
