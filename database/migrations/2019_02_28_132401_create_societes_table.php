<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSocietesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('societes', function (Blueprint $table) {
            $table->increments('Ste_id');
            $table->string('Ste_Nom');
            $table->string('Ste_MatFiscal');
            $table->dateTime('Ste_DateCrea');
            $table->decimal('Ste_CS', 18, 0);	
            $table->string('Ste_ForJur');
            $table->string('Ste_TVA');
            $table->string('Ste_NomPren');
            $table->string('Ste_Img');
            $table->string('Ste_Rib');
            $table->string('PrefixeClt');
            $table->string('PrefixeFrs');
            $table->string('PrefixeVenteDirecte');
            $table->string('PrefixeCD');
            $table->string('PrefixeBL');
            $table->string('PrefixeDV');
            $table->string('PrefixeFC');
            $table->string('PrefixeBR');
            $table->string('PrefixeFR');
            $table->string('PrefixeBA');
            $table->string('PrefixeFM');
            $table->integer('Num1BAV');
            $table->integer('Num1Fact');
            $table->integer('Adresse');
            $table->string('Code_Postale');
            $table->string('Tel1');
            $table->string('Tel2');
            $table->string('Fax1');
            $table->string('Fax2');
            $table->string('GSM1');
            $table->string('GSM2');
            $table->string('Email');
            $table->string('SiteWeb');
            $table->integer('TimbreFiscal');
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
        Schema::dropIfExists('societes');
    }
}
