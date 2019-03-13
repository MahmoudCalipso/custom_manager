<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Famille_articles extends Model
{
    public function article(){
    	return $this->hasMany('articles');
    }
}
