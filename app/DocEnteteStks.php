<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use app/Articles;
class DocEnteteStks extends Model
{
    public function article()
    {
        return $this->belongsToMany('articles');
    }
    
}
