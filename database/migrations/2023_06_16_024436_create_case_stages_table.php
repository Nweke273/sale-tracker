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
        Schema::create('case_stages', function (Blueprint $table) {
            $table->id();
            $table->foreignId('case_id')->nullable();
            $table->foreignId('stage_id')->nullable();
            $table->boolean('is_completed')->default('false');
            $table->boolean('is_active')->default('false');
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
        Schema::dropIfExists('case_stages');
    }
};
