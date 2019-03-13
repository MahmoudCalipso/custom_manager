<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Magasins extends Model
{
    use Notifiable;

    protected $fillable = [
        'nameMagasine','position'	
    ];

    public function article(){
    	return $this->hasMany('articles');
    }

}
