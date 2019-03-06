<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNumSeriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('num_series', function (Blueprint $table) {
            $table->increments('Serie_Id');
            $table->integer('Serie_Num');
            $table->integer('Serie_Des');
            $table->integer('disponible');
            // jointure avec la table article
            $table->unsignedInteger('Art_Id');
            $table->foreign('Art_Id')->references('Art_Id')->on('articles');
            //
			// jointure avec la table magasin
            $table->unsignedInteger('Mag_Id');
            $table->foreign('Mag_Id')->references('Mag_Id')->on('magasins');
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
        Schema::dropIfExists('num__series');
    }
}
