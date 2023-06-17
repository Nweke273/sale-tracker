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
        Schema::create('meetings', function (Blueprint $table) {
            $table->id();
            $table->text('subject');
            $table->text('location');
            $table->dateTime('from');
            $table->dateTime('to');
            $table->foreignId('host_module')->nullable();
            $table->foreignId('host_record_id')->nullable();
            $table->foreignId('related_to')->nullable();
            $table->foreignId('related_record_id')->nullable();
            $table->text('description');
            $table->foreignId('reminder_id')->nullable();
            $table->string('agenda');
            $table->foreignId('meeting_purpose_id')->nullable();
            $table->foreignId('meeting_outcome_id')->nullable();
            $table->foreignId('meeting_status_id')->nullable();
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
        Schema::dropIfExists('meetings');
    }
};
