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
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('lead_id')->nullable();
            $table->foreignId('account_id')->nullable();
            $table->string('salutation')->nullable();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('date_of_birth');
            $table->foreignId('department_id')->nullable();
            $table->foreignId('reporting_to_id')->nullable();
            $table->foreignId('job_title_id')->nullable();
            $table->foreignId('lead_source_id')->nullable();
            $table->foreignId('user_id')->nullable();
            $table->string('phone');
            $table->string('alt_phone')->nullable();
            $table->string('email');
            $table->string('alt_email')->nullable();
            $table->string('street');
            $table->string('city');
            $table->string('state');
            $table->string('zip_code');
            $table->string('country');
            $table->text('description');
            $table->string('website');
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
        Schema::dropIfExists('contacts');
    }
};
