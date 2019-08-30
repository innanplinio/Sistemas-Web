<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class procedure extends Model
{
    //
    protected $fillable=['name', 'price', 'user_id'];

    public function user(){
        return $this->belongsto('App\User');
    }
}
