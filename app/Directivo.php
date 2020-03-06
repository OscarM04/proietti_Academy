<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Directivo extends Model
{
    protected $primaryKey = 'CIDirectivo';

    public function atletas(){
        return $this->hasMany(Atleta::class,'CIDirectivo','CIDirectivo');
    }
}
