<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->increments('Clt_Code');
            $table->string('Clt_first_name');
            $table->string('Clt_last_name');
            $table->string('Clt_email');
            $table->string('Clt_pays');
            $table->string('Clt_adresse');
            $table->string('Clt_tel');
            $table->string('Clt_type');
            $table->integer('Clt_Remise');
            $table->string('Clt_ExoTimbre');
            $table->decimal('Clt_Solde', 18, 3);
            $table->decimal('Clt_Encours', 18, 3);
            $table->integer('CumuleFidelite');





            // jointure avec la table secteur
            $table->unsignedInteger('Sec_Id');
            $table->foreign('Sec_Id')->references('Sec_Id')->on('secteurs');
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
        Schema::dropIfExists('clients');
    }
}
