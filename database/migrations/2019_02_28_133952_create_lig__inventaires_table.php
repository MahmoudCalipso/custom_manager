<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLigInventairesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lig_inventaires', function (Blueprint $table) {
            $table->increments('Id_LgInv');
            $table->integer('QteReel_LgInv');
            $table->integer('QteTheo_LgInv');
            $table->integer('Ecart_LgInv');

            // jointure avec la table article
            $table->unsignedInteger('Art_Id');
            $table->foreign('Art_Id')->references('Art_Id')->on('articles');
            //
			// jointure avec la table inventaire
            $table->unsignedInteger('Id_Inv');
            $table->foreign('Id_Inv')->references('Id_Inv')->on('inventaires');
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
        Schema::dropIfExists('lig__inventaires');
    }
}
