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
        Schema::create('opportunities', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->foreignId('lead_id')->nullable();
            $table->foreignId('user_id')->nullable();
            $table->foreignId('stage_id')->nullable();
            $table->foreignId('contact_id')->nullable();
            $table->foreignId('industry_id')->nullable();
            $table->foreignId('opportunity_type_id')->nullable();
            $table->foreignId('lead_source_id')->nullable();
            $table->foreignId('rating_id')->nullable();
            $table->string('opportunity_stage')->nullable();
            $table->foreignId('pipeline_id')->nullable();
            $table->foreignId('loss_reason_id')->nullable();
            $table->text('description')->nullable();
            $table->double('expected_amount')->default(0.00);
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
        Schema::dropIfExists('lead_opportunities');
    }
};
