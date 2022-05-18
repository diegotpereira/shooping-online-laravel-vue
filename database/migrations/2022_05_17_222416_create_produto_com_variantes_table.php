<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProdutoComVariantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produto_com_variantes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('inventory_number')->unique();
            $table->string('product_number');
            $table->string('variante_valor');
            $table->decimal('variante_preco', 9, 2);
            $table->tinyInteger('variante_status')->default(1);
            $table->timestamps();
            $table->foreign('product_number')->references('number')->on('produtos');
            $table->foreign('inventory_number')->references('number')->on('inventarios');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produto_com_variantes');
    }
};
