<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome', 100);
            $table->string('sobrenome', 100);
            $table->integer('cpf');
            $table->integer('rg');
            $table->string('dataNascimento', 20);
            $table->string('endereco', 100);
            $table->string('email', 50);
            $table->integer('numeroCartao');
            $table->string('senha', 50);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clientes');
    }
}
