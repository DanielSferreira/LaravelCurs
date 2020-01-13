<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UsuarioT extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //

        Schema::create('usuariosT',function(Blueprint $t){
            $t->increments('id');
            $t->string('usuario');
            $t->string('email');
            $t->string('nome');
            $t->string('senha');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::drop('usuariosT');
    }
}
