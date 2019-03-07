<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reglements extends Model
{
    public function banque(){
    	return $this->hasOne('banques');
    }

    public function lig_reglement(){
    	return $this->hasOne('lig_reglements');
    }
    
}
