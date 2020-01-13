<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Notificacoes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notificacoes',function(Blueprint $t){
            $t->increments('Id');
            $t->string('DataExpedicao');
            $t->string('DataRealizar');
            $t->string('Titulo');
            $t->string('CorpoTexto');
            $t->string('Setor');
            
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
    }
}
