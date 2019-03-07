<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use app/Articles;
class Garanties extends Model
{
    public function article(){
    	return $this->hasMany('articles');
    }
}
