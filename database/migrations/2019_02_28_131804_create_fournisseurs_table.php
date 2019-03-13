<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFournisseursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fournisseur', function (Blueprint $table) {
            $table->increments('Four_Id');
            $table->string('Four_firstName');
            $table->string('Four_lastName');
            $table->string('Four_mail');
            $table->string('Four_Pays');
            $table->string('Four_adr');
            $table->string('Four_tel');
//
            // jointure avec la table type fournisseur
            $table->unsignedInteger('TypeFrs_Id');
            $table->foreign('TypeFrs_Id')->references('TypeFrs_Id')->on('type_fournisseurs');
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
        Schema::dropIfExists('fournisseur');
    }
}
