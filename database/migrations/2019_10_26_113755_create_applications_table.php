<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApplicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applications', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('invites_id')->unsigned()->nullable();
            $table->timestamps();
            $table->bigInteger('users_id')->unsigned();
            $table->bigInteger('recruitments_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('recruitments_id')->references('id')->on('recruitments');
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
        Schema::dropIfExists('applications');
    }
}
