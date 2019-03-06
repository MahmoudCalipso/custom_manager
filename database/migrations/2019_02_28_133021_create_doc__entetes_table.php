<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDocEntetesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doc_entetes', function (Blueprint $table) {
            $table->increments('DocEnt_Id');
            $table->string('DocEnt_Observation');
            $table->string('DocEnt_Ref');
            $table->string('DocEnt_Etat');
            $table->dateTime('DocEnt_DateCrea');
            $table->double('DocEnt_TTauxRemi');
            $table->double('DocEnt_TotalHT');
            $table->double('DocEnt_MtRemise');
            $table->double('DocEnt_TotalHTNet');
            $table->double('DocEnt_TVA');
            $table->double('DocEnt_MtTVA');
            $table->double('DocEnt_TotalTTC');
            $table->double('DocEnt_TotalTTCNet');
            $table->string('DocEnt_Type');
            $table->integer('Doc_Ent_Trace');
            $table->string('DocEnt_TtLettre');
            $table->double('Avoir_trace');
            $table->double('acc');

            // jointure avec la table user
            $table->unsignedInteger('User_Id');
            $table->foreign('User_Id')->references('User_Id')->on('users');
            //
            // jointure avec la table magasin
            $table->unsignedInteger('Mag_Id');
            $table->foreign('Mag_Id')->references('Mag_Id')->on('magasins');
            //
            // jointure avec la table reglement
            $table->unsignedInteger('Reg_Id');
            $table->foreign('Reg_Id')->references('Reg_Id')->on('reglements');
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
        Schema::dropIfExists('doc_entetes');
    }
}
