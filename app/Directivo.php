<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Directivo extends Model
{
    public function atletas(){
        return $this->hasMany(Atleta::class,'CIDirectivo');
    }
}
