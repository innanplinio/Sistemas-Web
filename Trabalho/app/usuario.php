<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class usuario extends Model
{
    //
    protected $fillable = ['nome','email','datanasc','usuario','password','item_id','heroi_id'];
}
