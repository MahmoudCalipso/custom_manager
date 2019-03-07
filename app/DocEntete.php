<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use app/Magasins;
use app/Articles;
class DocEntete extends Model
{
    use Notifiable;
    
    public function magasins()
    {
    	return $this->hasOne('magasins');
    }

    public function article(){
    	return $this->hasMany('articles');
    }
}
