<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSkillTestScoreTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('skill_test_score', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->enum('skill_level', ['basic', 'intermediate', 'advanced']);
            $table->integer('test_score');
            $table->timestamps();
            $table->bigInteger('users_id');
            $table->bigInteger('skills_id');
            $table->bigInteger('skill_test_id');
            $table->bigInteger('courses_id')->nullable();
            $table->foreign('users_id')->references('id')->on('users');
            $table->foreign('skills_id')->references('id')->on('skills');
            $table->foreign('skills_test_id')->references('id')->on('skills_test');
            $table->foreign('courses_id')->references('id')->on('courses');
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
        Schema::dropIfExists('skill_test_score');
    }
}
