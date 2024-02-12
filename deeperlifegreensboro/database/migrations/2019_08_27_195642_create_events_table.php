<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->string('place');
            $table->timestamp('eventStartDate');
            $table->timestamp('eventEndDate')->nullable();
            $table->longText('description');
            $table->string('image')->nullable()->default('person_1.jpg');
            $table->string('slug');
            $table->timestamps();
        });
    }

   
    public function down()
    {
        Schema::dropIfExists('events');
    }
}
