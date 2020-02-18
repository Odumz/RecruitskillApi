<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUpcomingInterviewTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('upcoming_interview', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('recruitments_id')->unsigned();
            $table->time('time');
            $table->date('date');
            $table->text('location');
            $table->foreign('recruitments_id')->references('id')->on('recruitments');
            $table->timestamps();
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('upcoming_interview');
    }
}
