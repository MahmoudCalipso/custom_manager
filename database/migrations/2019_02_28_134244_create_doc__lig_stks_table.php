<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDocLigStksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doc_lig_stks', function (Blueprint $table) {
            $table->increments('StkDocLig_Id');
            $table->integer('StkDocLig_Qte');
            
            $table->integer('StkDocLig_QteRet');
            // jointure avec la table article
            $table->unsignedInteger('Art_Id');
            $table->foreign('Art_Id')->references('Art_Id')->on('articles');
            //
            // jointure avec la table doc entete stock
            $table->unsignedInteger('StkDoc_Ent_Id');
            $table->foreign('StkDoc_Ent_Id')->references('StkDoc_Ent_Id')->on('doc_entete_s_t_k_s');
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
        Schema::dropIfExists('doc__lig_stks');
    }
}
