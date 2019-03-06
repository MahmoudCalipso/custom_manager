<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDocEnteteSTKSTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doc_entete_stks', function (Blueprint $table) {
            $table->increments('StkDoc_Ent_Id');
            $table->string('StkDoc_Ent_Num');
            $table->string('StkDoc_Ent_Obs');
            $table->dateTime('StkDoc_Ent_DateEnt');
            $table->dateTime('StkDoc_Ent_DateSrt');	
            $table->string('StkDoc_Ent_Type');
            $table->string('StkDoc_MgSt');
            $table->string('StkDoc_MgEt');
            $table->integer('StkDoc_Tie_Id');
            $table->string('Tracee');
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
        Schema::dropIfExists('doc__entete__s_t_k_s');
    }
}
