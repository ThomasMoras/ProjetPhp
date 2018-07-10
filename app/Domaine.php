<?php

namespace projetPhp;

use Illuminate\Database\Eloquent\Model;

class Domaine extends Model
{
    public function User(){
        return  $this->hasOne('App\User');
    }
}
