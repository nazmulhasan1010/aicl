<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDisordersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('disorders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('disorder_id');
            $table->string('disorder_name');
            $table->string('symptoms');
            $table->string('affect');
            $table->string('soil_drip');
            $table->string('Benefit');
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
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
        Schema::dropIfExists('disorders');
    }
}
