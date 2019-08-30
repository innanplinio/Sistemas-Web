<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cidade extends Model
{
    // fillable

    public function estado(){
        return $this->belongsTo('App\Estado');
    }
}
