<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->foreignId('event_type_id')->nullable();
            $table->foreignId('related_to')->nullable();
            $table->foreignId('related_record_id')->nullable();
            $table->foreignId('event_status_id')->nullable();
            $table->dateTime('start')->nullable();
            $table->dateTime('end')->nullable();
            $table->text('subject')->nullable();
            $table->string('agenda')->nullable();
            $table->text('description')->nullable();
            $table->foreignId('reminder_id')->nullable();
            $table->foreignId('event_purpose_id')->nullable();
            $table->foreignId('event_outcome_id')->nullable();
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
};
