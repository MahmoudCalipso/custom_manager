<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use app/Articles;

class Fournisseur extends Model
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'Four_name', 'Four_mail', 'Four_adr', 'Four_pays', 'Four_tel'
    ];

    public function article()
    {
        return $this->hasMany('Articles');
    }
}
