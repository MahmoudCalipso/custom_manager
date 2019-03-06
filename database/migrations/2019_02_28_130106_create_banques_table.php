<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBanquesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('banques', function (Blueprint $table) {
            $table->increments('BA_Id');
            $table->string('BA_Nom');
            $table->string('BA_lban');
            $table->string('BA_Bic');
            $table->string('BA_NumCompt');
            $table->string('BA_CleRib');
            $table->string('Adresse');
            $table->string('Rue');
            $table->string('Tel1');
            $table->string('Tel2');
            $table->string('GSM');
            $table->string('GSM2');
            $table->string('Contact');
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
        Schema::dropIfExists('banques');
    }
}
