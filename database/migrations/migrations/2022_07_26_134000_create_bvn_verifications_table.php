<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBvnVerificationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bvn_verifications', function (Blueprint $table) {
            $table->id();
            $table->foreignId('verification_id')->constrained('verifications');
            $table->foreignId('user_id')->constrained('users');
            $table->string('ref');
            $table->string('service_reference')->nullable();
            $table->json('validations')->nullable();
            $table->string('status')->default('pending');
            $table->string('reason')->nullable();
            $table->boolean('data_validation')->default(false);
            $table->boolean('selfie_validation')->default(false);
            $table->string('first_name')->nullable();
            $table->string('middle_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('image')->nullable();
            $table->string('enrollment_branch')->nullable();
            $table->string('enrollment_institution')->nullable();
            $table->string('phone')->nullable();
            $table->string('dob')->nullable();
            $table->boolean('subject_consent');
            $table->string('pin');
            $table->boolean('should_retrieve_nin')->nullable();
            $table->string('type');
            $table->string('gender')->nullable();
            $table->string('country');
            $table->boolean('all_validation_passed')->nullable();
            $table->string('fee')->nullable();
            $table->string('requested_at')->nullable();
            $table->string('last_modified_at')->nullable();
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
        Schema::dropIfExists('bvn_verifications');
    }
}
