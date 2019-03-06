<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePrivilegesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('privileges', function (Blueprint $table) {
            $table->increments('Priv_Id');
            $table->boolean('Priv_SelectClt');
            $table->boolean('Priv_SelectFrs');
            $table->boolean('Priv_SelectArt');
            $table->boolean('Priv_AjtClt');
            $table->boolean('Priv_AjtFrs');
            $table->boolean('Priv_AjtArt');
            $table->boolean('Priv_MajClt');
            $table->boolean('Priv_MajFrs'); 
            $table->boolean('Priv_MajArt');
            $table->boolean('Priv_DelClt');
            $table->boolean('Priv_DelFrs');
            $table->boolean('Priv_DelArt');
            $table->boolean('Priv_SelectDocAchat');
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
        Schema::dropIfExists('privileges');
    }
}
