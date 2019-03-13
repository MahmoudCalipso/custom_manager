<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Marques extends Model
{
    public function article(){
    	return $this->hasMany('articles');
    }
}
