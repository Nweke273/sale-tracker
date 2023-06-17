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
        Schema::create('calls', function (Blueprint $table) {
            $table->id();
            $table->foreignId('related_to')->nullable();
            $table->foreignId('related_record_id')->nullable();
            $table->string('type');
            $table->string('status');
            $table->foreignId('user_id')->nullable();
            $table->string('subject')->nullable();
            $table->string('video_recording_url')->nullable();
            $table->foreignId('call_purpose_id')->nullable();
            $table->text('agenda');
            $table->foreignId('call_result_id')->nullable();
            $table->text('description');
            $table->foreignId('reminder_id');
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
        Schema::dropIfExists('calls');
    }
};
