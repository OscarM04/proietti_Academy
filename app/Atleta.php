<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Atleta extends Model
{
    protected $primaryKey = 'CIAtleta';

    public function directivo(){
        return $this->belongsTo(Directivo::class,'CIDirectivo','CIDirectivo');
    }

    public function representantes(){
        return $this->hasMany(Representante::class,'CIAtleta','CIAtleta');
    }
}
