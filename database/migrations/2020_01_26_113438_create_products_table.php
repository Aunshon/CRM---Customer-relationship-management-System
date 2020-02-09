<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->bigIncrements('id');
            $table->string('product_name');
            $table->string('product_price');
            $table->string('product_quantity');
            $table->longText('product_description');
            $table->string('product_category');
            $table->string('product_subcategory');
            $table->string('brand');
            $table->string('activation');
            $table->string('photo');
            $table->string('child_photo_1');
            $table->string('child_photo_2');
            $table->string('child_photo_3');
            $table->string('form_checked');
            $table->softDeletes();
            $table->longText('slug');
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
