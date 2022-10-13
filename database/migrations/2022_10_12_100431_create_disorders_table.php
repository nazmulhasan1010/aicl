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
            $table->string('disorder_id',20);
            $table->string('crops_id',20);
            $table->string('disorder_name');
            $table->string('symptoms');
            $table->string('affect');
            $table->string('soil_drip');
            $table->string('Benefit');
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
