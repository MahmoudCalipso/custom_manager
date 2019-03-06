<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLigReglementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lig_reglements', function (Blueprint $table) {
            $table->increments('LgRegId');
            $table->integer('DocEnt_Id');
            $table->double('Mnt_Reg');
			
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
        Schema::dropIfExists('lig__reglements');
    }
}
