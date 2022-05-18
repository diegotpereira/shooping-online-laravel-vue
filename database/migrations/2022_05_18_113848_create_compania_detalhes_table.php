<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('compania_detalhes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('logo_url');
            $table->string('logo_path');
            $table->string('image_url');
            $table->string('image_path');
            $table->string('nome');
            $table->string('email');
            $table->string('endereco');
            $table->string('contato_numero');
            $table->string('tin_number');
            $table->text('sobre_nos');
            $table->text('termos_e_condicoes');
            $table->text('política_devolucao');
            $table->integer('reservado_dias');
            $table->integer('entrega_dias');
            $table->integer('devido_pagamento_dias');
            $table->integer('dias_de_companhamento');
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
        Schema::dropIfExists('compania_detalhes');
    }
};
