<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDocLignesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doc_lignes', function (Blueprint $table) {
            $table->increments('DocLig_Id');
            $table->integer('DocLig_Qte');
            $table->integer('DocLig_TauxRemi');
            $table->integer('DocLig_PUHT');
            $table->integer('DocLig_PUHTNet');
            $table->integer('DocLig_TotRemise');
            $table->integer('DocLig_TauxTva');
            $table->integer('DocLig_TotHTNet');
            $table->integer('DocLig_TotTCNet');
            $table->integer('DocLig_TotTC');
            $table->integer('DocLig_MntTVA');
            $table->double('PUACHTTC');

            // jointure avec la table article
            $table->unsignedInteger('Art_Id');
            $table->foreign('Art_Id')->references('Art_Id')->on('articles');
            //
            // jointure avec la table doc entete 
            $table->unsignedInteger('DocEnt_Id');
            $table->foreign('DocEnt_Id')->references('DocEnt_Id')->on('doc_entetes');
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
        Schema::dropIfExists('doc__lignes');
    }
}
