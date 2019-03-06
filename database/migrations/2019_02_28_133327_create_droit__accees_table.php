<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDroitAcceesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('droit_accees', function (Blueprint $table) {
            $table->increments('DrtAcc_Id');
            $table->string('DrtAcc_Intitule');
			
             // jointure avec la table privilege
            $table->unsignedInteger('Priv_Id');
            $table->foreign('Priv_Id')->references('Priv_Id')->on('privileges');
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
        Schema::dropIfExists('droit__accees');
    }
}
