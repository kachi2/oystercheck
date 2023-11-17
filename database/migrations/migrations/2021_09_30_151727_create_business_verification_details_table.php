<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBusinessVerificationDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('business_verification_details', function (Blueprint $table) {
            $table->id();
            $table->integer('business_verification_id')->nullable();
            $table->string('ref')->nullable();
            $table->string('service_ref')->nullable();
            $table->integer('user_id')->nullable();
            $table->double('fee')->nullable();
            $table->string('reg_no')->nullable();
            $table->string('reg_date')->nullable();
            $table->string('phone')->nullable();
            $table->string('website')->nullable();
            $table->string('address')->nullable();
            $table->string('state')->nullable();
            $table->string('lga')->nullable();
            $table->string('city')->nullable();
            $table->string('status')->nullable();
            $table->string('slug')->nullable();
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
        Schema::dropIfExists('business_verification_details');
    }
}
