<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Representante extends Model
{
    protected $primaryKey = 'idRepresentante';

    public function atleta(){
        return $this->belongsTo(Atleta::class,'CIAtleta','CIAtleta');
    }
}