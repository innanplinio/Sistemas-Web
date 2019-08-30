<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class itemuser extends Model
{
    //
    protected $fillable = ['item_id','user_id'];

    public function heroi(){

        return $this->belongsto('App\heroi');

    }
    public function item(){

        return $this->belongsto('App\item');

    }

}
