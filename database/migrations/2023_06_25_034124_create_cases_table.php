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
        Schema::create('cases', function (Blueprint $table) {
            $table->id();
            $table->foreignId('opportunity_id')->constrained();
            $table->string('name')->nullable()->constrained();
            $table->foreignId('case_type_id')->nullable()->constrained();
            $table->foreignId('case_origin_id')->nullable()->constrained();
            $table->foreignId('priority_id')->nullable()->constrained();
            $table->foreignId('pipeline_id')->nullable()->constrained();
            $table->foreignId('case_reason_id')->nullable()->constrained();
            $table->text('description')->nullable();
            $table->text('internal_comments')->nullable();
            $table->text('lessons_learned')->nullable();
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
        Schema::dropIfExists('cases');
    }
};
