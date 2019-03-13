<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Articles;
//use App\Depot;
use App\Magasine;
use App\Client;
//use App\Caisse;

class User extends Authenticatable
{
     use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
    'User_Id','user_Image' ,'user_Type' ,'user_Tel','user_Name',
    'user_Bloquer','email','password'       
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    
    public function article(){
        return $this->hasMany('articles');
    }



    public function magasine(){
        return $this->hasMany('Magasine');
    }

    public function client(){
        return $this->hasMany('Client');
    }


   
}
