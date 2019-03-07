<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
		'Clt_Code','Clt_name','Clt_email','Clt_adresse','Clt_tel','TypeClt',
		'Clt_Remise','Clt_ExoTimbre','Clt_Solde','Clt_Encours','CumuleFidelite'
    ];
}
