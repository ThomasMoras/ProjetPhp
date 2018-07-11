<?php

namespace projetPhp;

use Illuminate\Database\Eloquent\Model;

class Competence extends Model
{
    protected $fillable = [
        'nom'
    ];

    public function users() {
        return $this->belongsToMany(User::class);
    }
}
