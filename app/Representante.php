<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Representante extends Model
{
    protected $primaryKey = 'idRepresentante';
    public function atletas(){
        return $this->hasMany(Atleta::class,'idRepresentante','idRepresentante');
    }
}