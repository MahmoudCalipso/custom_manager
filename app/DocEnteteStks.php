<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DocEnteteStks extends Model
{
    public function article()
    {
        return $this->belongsToMany('articles');
    }
    
}
