<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSkillsTestTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('skills_test', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('skill_test_questions');
            $table->timestamps();
            $table->bigInteger('users_id')->unsigned();
            $table->bigInteger('skills_id')->unsigned()->nullable();
            $table->bigInteger('skills_test_type_id')->unsigned()->nullable();
            $table->foreign('users_id')->references('id')->on('users');
            $table->foreign('skills_id')->references('id')->on('skills');
            $table->foreign('skill_test_type_id')->references('id')->on('skill_test_type');
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
        Schema::dropIfExists('skills_test');
    }
}
