<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class test extends Model
{
    //
    protected $fillable=['user_id', 'procedure_id', 'date'];

    public function user(){
        return $this->belongsto('App\user');
    }
    public function procedure(){
        return $this->belongsto('App\procedure');
    }
}
