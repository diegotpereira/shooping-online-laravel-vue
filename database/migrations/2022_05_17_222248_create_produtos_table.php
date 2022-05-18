<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProdutosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produtos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('number')->unique();
            $table->unsignedInteger('categoria_id');
            $table->string('produto_nome');
            $table->text('produto_descricao');
            $table->integer('produto_status')->default(1);
            $table->string('produto_image_url');
            $table->string('produto_image_path');
            $table->tinyInteger('product_has_variant');
            $table->string('produto_url');
            $table->timestamps();
            $table->foreign('categoria_id')->references('id')->on('categorias');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produtos');
    }
};
