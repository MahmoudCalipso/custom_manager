<?php

namespace App;

use Illuminate\Database\Eloquent\Model;




class Articles extends Model
{
    use Notifiable;

    protected $fillable = [
		'Art_Id', 'Art_Ref','Art_CodeBarre','Art_Designation','Art_DateAchat','Art_Bloquer',
		'Art_PrixUht','Art_Desc','Art_Remise','Promo', 'Pays','Art_ImageCodeABarre','Art_PrixUTtc',
		'Art_Image','Etat','QteMax','QteMin','QteReel','QteTheorique','DateEntree','DateSortie',
		'Art_Marge','Art_TauxMarge','Art_HT','Art_TTC','ArtRv_HT','ArtRv_TTC','NbrPoint',
    ];

    public function users()
    {
    	return $this->belongsToMany('users');
    }

    public function tva()
    {
        return $this->hasOne('tva');
    }

    public function garanties()
    {
        return $this->hasOne('garanties');
    }

    public function famille_articles()
    {
        return $this->hasOne('famille_articles');
    }

    public function marques()
    {
        return $this->hasOne('marques');
    }

    public function magasins()
    {
        return $this->hasOne('magasins');
    }


}
