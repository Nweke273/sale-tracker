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
        Schema::create('phone_books', function (Blueprint $table) {
            $table->id();
            $table->string('salutation');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('role');
            $table->string('phone');
            $table->string('alt_phone')->nullable();
            $table->string('email');
            $table->string('contact_person');
            $table->string('contact');
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
        Schema::dropIfExists('phone_books');
    }
};
