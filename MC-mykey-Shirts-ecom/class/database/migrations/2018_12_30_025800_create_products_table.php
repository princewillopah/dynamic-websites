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
	          $table->integer('category_id');
	          $table->string('name');
              $table->string('slug');
	          $table->text('description');
	          $table->string('size');
              $table->boolean('featured')->default(0);
	          $table->string('price')->default(0);
	          $table->string('image');

            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('products');
    }
}
