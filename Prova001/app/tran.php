<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tran extends Model
{
    //
    protected $fillable=['cliente_id', 'tipo_id', 'data', 'valor', 'credito'];

    public function tipo(){
        return $this->belongsto('App\tipo');
    }
    public function cliente(){
        return $this->belongsto('App\cliente');
    }
}
