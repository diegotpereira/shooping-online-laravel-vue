<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInventariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inventarios', function (Blueprint $table) {
            $table->increments('id');
            $table->string('number')->unique();
            $table->string('product_number');
            $table->integer('inventario_estoque');
            $table->integer('inventario_nivel_critico');
            $table->tinyInteger('alert')->default(0);
            $table->timestamps();
            $table->foreign('product_number')->references('number')->on('produtos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('inventarios');
    }
};
