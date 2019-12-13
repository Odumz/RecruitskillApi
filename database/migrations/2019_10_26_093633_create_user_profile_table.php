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
            $table->bigInteger('users_id')->unsigned();
            $table->bigInteger('skill_test_score_id')->unsigned()->nullable();
            $table->bigInteger('recruitments_id')->unsigned()->nullable();
            $table->bigInteger('skills_id')->unsigned()->nullable();
            $table->bigInteger('invites_id')->unsigned()->nullable();
            $table->bigInteger('applications_id')->unsigned()->nullable();
            $table->bigInteger('certificates_id')->unsigned()->nullable();
            $table->enum('user_category', ['recruiter', 'job seeker', 'super admin']);
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
        });
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
