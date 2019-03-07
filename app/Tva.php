<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use app/Articles;
class Tva extends Model
{
     
       use Notifiable;
   
    protected $fillable = [
	     'TVA_Id','TVA_Des'
    ];
     
    public function article()
    {
        return $this->hasMany('article');
    }
}
