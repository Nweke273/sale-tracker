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
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable();
            $table->text('subject')->nullable();
            $table->dateTime('due_date')->nullable();
            $table->foreignId('task_priority_id')->nullable();
            $table->foreignId('related_to')->nullable();
            $table->foreignId('related_record_id')->nullable();
            $table->text('description')->nullable();
            $table->foreignId('reminder_id')->nullable();
            $table->foreignId('task_purpose_id')->nullable();
            $table->foreignId('task_outcome_id')->nullable();
            $table->foreignId('task_status_id')->nullable();
            $table->text('todo_list')->nullable();
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
        Schema::dropIfExists('tasks');
    }
};
