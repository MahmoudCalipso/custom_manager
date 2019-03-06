<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->increments('Art_Id');
            $table->string('Art_Ref');
            $table->string('Art_CodeBarre');
            $table->string('Art_Designation');
            $table->dateTime('Art_DateAchat');
            $table->boolean('Art_Bloquer');
            $table->double('Art_PrixUht');
            $table->string('Art_Desc');
            $table->double('Art_Remise');
            $table->integer('Promo'); 
            $table->string('Pays');
            $table->string('Art_ImageCodeABarre');
            $table->double('Art_PrixUTtc');
            $table->string('Art_Image');
            $table->string('Etat');
            $table->integer('QteMax');
            $table->integer('QteMin');
            $table->integer('QteReel');
            $table->integer('QteTheorique');
            $table->dateTime('DateEntree');
            $table->dateTime('DateSortie');
            $table->double('Art_Marge');
            $table->double('Art_TauxMarge');
            $table->double('Art_HT');
            $table->double('Art_TTC');
            $table->double('ArtRv_HT');
            $table->double('ArtRv_TTC');
            $table->integer('NbrPoint');
			
            // jointure avec la table type article
            $table->unsignedInteger('idTypeArt');
            $table->foreign('idTypeArt')->references('idTypeArt')->on('type_articles');
            //
            // jointure avec la table garantie
            $table->unsignedInteger('Gr_Id');
            $table->foreign('Gr_Id')->references('Gr_Id')->on('garanties');
            //
			// jointure avec la table magasin
            $table->unsignedInteger('Mag_Id');
            $table->foreign('Mag_Id')->references('Mag_Id')->on('magasins');
            //
            // jointure avec la table tva
            $table->unsignedInteger('TVA_Id');
            $table->foreign('TVA_Id')->references('TVA_Id')->on('tva');
            //
			// jointure avec la table marque
            $table->unsignedInteger('Marque_Id');
            $table->foreign('Marque_Id')->references('Marque_Id')->on('marques');
            //
            // jointure avec la table famille article
            $table->unsignedInteger('FamArt_Id');
            $table->foreign('FamArt_Id')->references('FamArt_Id')->on('famille_articles');
            //
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('articles');
    }
}
