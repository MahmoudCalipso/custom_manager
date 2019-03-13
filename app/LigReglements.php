<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LigReglements extends Model
{
     public function reglement(){
    	return $this->hasMany('reglements');
    }

}
