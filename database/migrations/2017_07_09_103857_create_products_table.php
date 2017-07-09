<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');

            $table->string('name');
            $table->string('url');
            $table->longText('description');
            $table->string('status');

            $table->boolean('is_onsale');
            $table->boolean('enable_stock');

            $table->integer('stock_count');

            $table->double('base_price');
            $table->double('cost_price');
            $table->double('sale_price');


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
        Schema::dropIfExists('products');
    }
}
