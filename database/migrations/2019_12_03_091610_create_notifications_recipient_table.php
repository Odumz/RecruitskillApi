<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNotificationsRecipientTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notifications_recipient', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('recipient_id');
            $table->bigInteger('notifications_id');
            $table->timestamps();
            $table->foreign('recipient_id')->references('id')->on('users');
            $table->foreign('notifications_id')->references('id')->on('notifications');
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
        Schema::dropIfExists('notifications_recipient');
    }
}
