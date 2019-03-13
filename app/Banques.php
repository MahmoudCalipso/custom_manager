<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Banques extends Model
{
   public function reglement(){
    	return $this->hasMany('reglements');
    }
}
