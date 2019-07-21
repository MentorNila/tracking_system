<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTrackingCodesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tracking_codes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('tracking_code');
            $table->unsignedBigInteger('user_id');
            $table->dateTime('estimated_delivery_date_time');
            $table->foreign('user_id')->references('id')->on('users');
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
        Schema::dropIfExists('tracking_codes');
    }
}
