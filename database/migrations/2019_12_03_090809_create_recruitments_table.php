<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecruitmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recruitments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('job_title');
            $table->mediumText('job_description');
            $table->string('alias');
            $table->enum('status', ['ongoing', 'concluded']);
            $table->enum('job_type', ['full time', 'part time', 'contract', 'IT', 'internship']);
            $table->boolean('isPublished');
            $table->date('duration');
            $table->string('required_experience');
            $table->mediumText('required_skills');
            $table->string('country');
            $table->string('state');
            $table->string('city');
            $table->string('responsibilities');
            $table->enum('position', ['entry level', 'beginner' , 'intermediate', 'advanced']);
            $table->tinyInteger('renumeration');
            $table->enum('data_type', ['user', 'system']);
            $table->enum('gender', ['any', 'male', 'female']);
            $table->timestamps();
            $table->bigInteger('users_id')->unsigned();
            $table->foreign('users_id')->references('id')->on('users');

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
        Schema::dropIfExists('recruitments');
    }
}
