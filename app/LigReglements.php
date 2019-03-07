<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use app/Reglements;
class LigReglements extends Model
{
     public function reglement(){
    	return $this->hasMany('reglements');
    }

}
