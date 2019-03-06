<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTraceSeriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trace_series', function (Blueprint $table) {
            $table->increments('TraceSerie_Id');
            // jointure avec la table doc ligne
            $table->unsignedInteger('DocLig_Id');
            $table->foreign('DocLig_Id')->references('DocLig_Id')->on('doc_lignes');
            //
            // jointure avec la table num serie
            $table->unsignedInteger('Serie_Id');
            $table->foreign('Serie_Id')->references('Serie_Id')->on('num_series');
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
        Schema::dropIfExists('trace__series');
    }
}
