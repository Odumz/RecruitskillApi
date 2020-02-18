<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePublishedRecruitmentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('published_recruitment', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('recruitments_id')->unsigned();
            $table->string('alias');
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
        Schema::dropIfExists('published_recruitment');
    }
}
