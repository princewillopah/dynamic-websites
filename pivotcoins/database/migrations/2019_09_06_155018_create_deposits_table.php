<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDepositsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('deposits', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('user_id');
            $table->decimal('deposit_amount',9,2)->default(0.00);
            $table->decimal('returns',9,2)->default(0.00);
            $table->boolean('active_deposit')->default(1);   
            $table->boolean('paid')->default(0);  
            $table->integer('plan')->default(0);  
            // $table->decimal('balance',9,2)->default(0.00);      
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
        Schema::dropIfExists('deposits');
    }
}
