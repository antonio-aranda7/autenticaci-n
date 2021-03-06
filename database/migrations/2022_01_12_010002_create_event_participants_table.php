<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventParticipantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('event_participant', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
/*//-----------------------------
            $table->unsignedBigInteger('event_id');
            $table->unsignedBigInteger('participant_id');
            $table->foreign('event_id')->references('id')->on('events');
            $table->foreign('participant_id')->references('id')->on('participants');
//-----------------------------------------*/
            $table->foreignId('event_id')->constrained();
            $table->foreignId('participant_id')->constrained();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('event_participant');
    }
}
