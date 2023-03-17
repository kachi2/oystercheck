<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePhoneNumberVerificationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('phone_number_verifications', function (Blueprint $table) {
            $table->id();
            $table->foreignId('verification_id')->constrained('verifications');
            $table->foreignId('user_id')->constrained('users');
            $table->string('ref');
            $table->string('service_reference')->nullable();
            $table->json('address')->nullable();
            $table->json('validations')->nullable();
            $table->string('status');
            $table->string('reason')->nullable();
            $table->boolean('data_validation');
            $table->boolean('selfie_validation');
            $table->json('phone_details')->nullable();
            $table->string('first_name')->nullable();
            $table->string('middle_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('image')->nullable();
            $table->string('email')->nullable();
            $table->string('nin')->nullable();
            $table->string('birth_state')->nullable();
            $table->string('religion')->nullable();
            $table->string('birth_lga')->nullable();
            $table->string('birth_country')->nullable();
            $table->string('dob')->nullable();
            $table->boolean('subject_consent');
            $table->string('phone_number');
            $table->string('type');
            $table->string('gender')->nullable();
            $table->boolean('all_validation_passed')->nullable();
            $table->string('fee')->nullable();
            $table->boolean('advance_search')->nullable();
            $table->string('requested_at');
            $table->string('last_modified_at');
            $table->string('country');
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
        Schema::dropIfExists('phone_number_verifications');
    }
}
