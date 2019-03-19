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
            $table->string('slug');
            $table->integer('unit_price')->unsigned();
            $table->integer('promo_price')->unsigned();
            $table->text('descriptions')->nullable();
            $table->integer('publishing_year')->unsigned();
            $table->integer('quantity')->unsigned();

            $table->integer('id_cate')->unsigned();
            $table->foreign('id_cate')->references('id')->on('categories');

            $table->integer('id_manu')->unsigned();
            $table->foreign('id_manu')->references('id')->on('manufactures');

            $table->integer('id_img')->unsigned();
            $table->foreign('id_img')->references('id')->on('images');
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
