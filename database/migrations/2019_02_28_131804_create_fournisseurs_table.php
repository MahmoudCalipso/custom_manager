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
        Schema::create('fournisseurs', function (Blueprint $table) {
            $table->increments('Four_Id');
            $table->string('Four_name');
            $table->string('Four_mail');
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
        Schema::dropIfExists('fournisseurs');
    }
}
