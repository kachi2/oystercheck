<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNipVerificationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nip_verifications', function (Blueprint $table) {
            $table->id();
            $table->foreignId('verification_id')->constrained('identity_verifications');
            $table->foreignId('user_id')->constrained('users');
            $table->string('service_reference');
            $table->string('ref');
            $table->json('validations')->nullable();
            $table->string('status')->default('pending');
            $table->string('reason')->nullable();
            $table->boolean('data_validation');
            $table->boolean('selfie_validation');
            $table->string('first_name')->nullable();
            $table->string('middle_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('expired_date')->nullable();
            $table->boolean('notify_when_id_expire')->nullable();
            $table->string('image')->nullable();
            $table->string('signature')->nullable();
            $table->string('issued_at')->nullable();
            $table->string('issued_date')->nullable();
            $table->string('phone')->nullable();
            $table->string('dob')->nullable();
            $table->boolean('subject_consent');
            $table->string('pin');
            $table->string('type');
            $table->string('gender')->nullable();
            $table->boolean('all_validation_passed')->nullable();
            $table->string('fee')->nullable();
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
        Schema::dropIfExists('nip_verifications');
    }
}
