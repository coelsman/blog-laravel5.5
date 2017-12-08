<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title', 512);
            $table->string('address', 512);
            $table->dateTime('start_time');
            $table->dateTime('end_time');
            $table->double('ticket_prize');
            $table->double('sale_ticket_prize');
            $table->tinyInteger('hours_sale');
            $table->integer('attends');
            $table->integer('emails');
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
        Schema::dropIfExists('events');
    }
}
