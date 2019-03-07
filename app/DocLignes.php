<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use app/DocEntete;
class DocLignes extends Model
{
     use Notifiable;

     public function doc_entete(){
     	return $this->hasMany('doc_entetes');
     }
}

