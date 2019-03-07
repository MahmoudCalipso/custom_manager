<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use app/Articles;
class Marques extends Model
{
    public function article(){
    	return $this->hasMany('articles');
    }
}
