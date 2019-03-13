<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DocLigStks extends Model
{
    public function docEnteteStks(){
    	return $this->hasMany('doc_entete_stks');
    }
}
