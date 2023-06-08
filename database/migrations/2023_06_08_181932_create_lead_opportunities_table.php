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
        Schema::create('lead_opportunities', function (Blueprint $table) {
            $table->id();
            $table->foreignId('lead_id');
            $table->foreignId('user_id');
            $table->foreignId('stage_id');
            $table->foreignId('opportunity_id');
            $table->string('opportunity_status');
            $table->foreignId('pipeline_id');
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
