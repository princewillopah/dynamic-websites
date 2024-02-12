<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSermonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sermons', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->string('slug');
            $table->integer('pastor_id');
            $table->integer('category_id');
            $table->timestamp('sermonDate');
            $table->time('startTime');
            $table->time('endTime');
            $table->longText('description')->nullable();
            $table->string('coverImage')->nullable()->default('person_1.jpg');;
            $table->string('vidioLink')->nullable();
            $table->string('audioLink')->nullable();
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
        Schema::dropIfExists('sermons');
    }
}
