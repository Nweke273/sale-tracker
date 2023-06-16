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
        Schema::create('accounts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('lead_id')->nullable();
            $table->foreignId('industry_id')->nullable();
            $table->foreignId('account_type_id')->nullable();
            $table->integer('annual_revenue')->nullable();
            $table->foreignId('lead_source_id')->nullable();
            $table->foreignId('parent_account_id')->nullable();
            $table->integer('no_of_employees');
            $table->foreignId('user_id')->nullable();
            $table->string('phone');
            $table->string('alt_phone');
            $table->string('email');
            $table->string('alt_email')->nullable();
            $table->string('fax');
            $table->string('street');
            $table->string('city');
            $table->string('state');
            $table->string('zip_code');
            $table->string('country');
            $table->string('website');
            $table->string('billing_street');
            $table->string('billing_city');
            $table->string('billing_state');
            $table->string('billing_zip_code');
            $table->string('billing_country');
            $table->string('shipping_street');
            $table->string('shipping_city');
            $table->string('shipping_state');
            $table->string('shipping_zip_code');
            $table->string('shipping_country');
            $table->text('description');
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
        Schema::dropIfExists('accounts');
    }
};
