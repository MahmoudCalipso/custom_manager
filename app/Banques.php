<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use app/Reglements;
class Banques extends Model
{
   public function reglement(){
    	return $this->hasMany('reglements');
    }
}
