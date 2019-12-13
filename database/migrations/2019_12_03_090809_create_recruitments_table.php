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
            $table->bigInteger('users_id')->unsigned();
            $table->string('job_title');
            $table->mediumText('job_description');
            $table->string('duration');
            $table->string('required_experience');
            $table->mediumText('required_skills');
            $table->string('country');
            $table->string('state');
            $table->string('city');
            $table->string('responsibilities');
            $table->string('position');
            $table->string('renumeration');
            $table->string('job_category');
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
        Schema::dropIfExists('recruitments');
    }
}
