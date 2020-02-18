<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserProfileTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users_profile', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('phone');
            $table->enum('gender', ['male', 'female']);
            $table->string('career_title')->nullable();
            $table->enum('availability_status', ['actively searching', 'hired', 'available'])->nullable();
            $table->string('country');
            $table->string('state');
            $table->string('city');
            $table->string('address');
            $table->mediumText('bio');
            $table->timestamps();
            $table->bigInteger('users_id')->unsigned();
            $table->bigInteger('skill_test_score_id')->unsigned()->nullable();
            $table->bigInteger('recruitments_id')->unsigned()->nullable();
            $table->bigInteger('skills_id')->unsigned()->nullable();
            $table->bigInteger('invites_id')->unsigned()->nullable();
            $table->bigInteger('applications_id')->unsigned()->nullable();
            $table->bigInteger('certificates_id')->unsigned()->nullable();
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('skill_test_score_id')->references('id')->on('skill_test_score');
            $table->foreign('recruitments_id')->references('id')->on('recruitments');
            $table->foreign('skills_id')->references('id')->on('skills');
            $table->foreign('invites_id')->references('id')->on('invites');
            $table->foreign('applications_id')->references('id')->on('applications');
            $table->foreign('certificates_id')->references('id')->on('certificates');
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
        Schema::dropIfExists('user_profile');
    }
}
