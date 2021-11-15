<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddressVerificationDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('address_verification_details', function (Blueprint $table) {
            $table->id();
            $table->string('reference_id')->nullable();
            $table->string('name')->nullable();
            $table->string('package_name')->nullable();
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('email')->nullable();
            $table->string('flat_number')->nullable();
            $table->string('building_name')->nullable();
            $table->string('building_number')->nullable();
            $table->string('sub_street')->nullable();
            $table->string('street')->nullable();
            $table->string('landmark')->nullable();
            $table->string('state')->nullable();
            $table->string('city')->nullable();
            $table->string('country')->nullable();
            $table->string('longitude')->nullable();
            $table->string('latitude')->nullable();
            $table->string('formatted')->nullable();
            $table->string('guarantor_image')->nullable();
            $table->string('registration_number')->nullable();
            $table->string('status')->nullable();
            $table->string('photo_url')->nullable();
            $table->string('reasons_for_failure')->nullable();
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
        Schema::dropIfExists('address_verification_details');
    }
}
