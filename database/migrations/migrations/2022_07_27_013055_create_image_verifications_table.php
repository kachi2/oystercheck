<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImageVerificationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('image_verifications', function (Blueprint $table) {
            $table->id();
            $table->foreignId('verification_id')->constrained('verifications');
            $table->foreignId('user_id')->constrained('users');
            $table->string('ref');
            $table->string('service_reference')->nullable();
            $table->string('status');
            $table->string('reason')->nullable();
            $table->boolean('selfie_validation');
            $table->json('image_comparison')->nullable();
            $table->boolean('subject_consent');
            $table->boolean('all_validation_passed')->nullable();
            $table->string('fee')->nullable();
            $table->string('type');
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
        Schema::dropIfExists('compare_image_verifications');
    }
}
