<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->string('slug');
            $table->decimal('amount',11,2)->nullable()->default(0.00);
            $table->text('short_description')->nullable();
            $table->longText('description')->nullable();
            $table->boolean('popular')->default(0);
            $table->timestamp('date')->nullable();
            $table->integer('category_id')->unsigned();
            $table->integer('format_id')->unsigned();
            $table->string('cover_img')->nullable();
            $table->string('thumbnail')->nullable();
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
        Schema::dropIfExists('courses');
    }
}
