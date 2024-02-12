<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug');
            $table->string('job_code');
            $table->string('company_name');

            $table->longText('description')->nullable();
            $table->string('job_type')->nullable();
            $table->text('short_description')->nullable();
            $table->timestamp('due_date')->nullable();
            $table->boolean('show')->default(0);
            $table->integer('location_id')->unsigned();
            $table->integer('industry_id')->unsigned();
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
        Schema::dropIfExists('jobs');
    }
}
