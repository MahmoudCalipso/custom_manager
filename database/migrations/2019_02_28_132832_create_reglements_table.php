<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReglementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reglements', function (Blueprint $table) {
            $table->increments('Reg_Id');
            $table->dateTime('Reg_Date');
            $table->integer('Reg_MntRecu');
            $table->dateTime('Reg_DateEcheance');
            $table->integer('Reg_NumEcheance');
            $table->string('Reg_Observation');
            $table->string('Reg_Mode');
            $table->integer('Reg_MntAffecte');
            
			
			// jointure avec la table tier
            $table->unsignedInteger('Tie_Id');
            $table->foreign('Tie_Id')->references('Tie_Id')->on('tiers');
            //
            // jointure avec la table banque
            $table->unsignedInteger('BA_Id');
            $table->foreign('BA_Id')->references('BA_Id')->on('banques');
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
        Schema::dropIfExists('reglements');
    }
}
