<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTraceSerieAchatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trace_serie_achats', function (Blueprint $table) {
            $table->increments('TraceSerieAchat_Id');

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
        Schema::dropIfExists('trace__serie__achats');
    }
}
