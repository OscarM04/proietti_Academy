<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Atleta extends Model
{
    
    public function directivo(){
        return $this->belongsTo(Directivo::class,'CIDirectivo','CIDirectivo');
    }

    public function representantes(){
        return $this->belongsTo(Representante::class,'idRepresentante','idRepresentante');
    }
}
