<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Garanties extends Model
{
    public function article(){
    	return $this->hasMany('articles');
    }
}
