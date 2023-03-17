<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBankAccountVerificationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bank_account_verifications', function (Blueprint $table) {
            $table->id();
            $table->foreignId('verification_id')->constrained('verifications');
            $table->foreignId('user_id')->constrained('users');
            $table->string('ref');
            $table->string('service_reference')->nullable();
            $table->string('status');
            $table->string('reason')->nullable();
            $table->boolean('data_validation');
            $table->boolean('selfie_validation');
            $table->string('fee')->nullable();
            $table->boolean('subject_consent');
            $table->string('account_number');
            $table->string('bank_code');
            $table->string('bank_name');
            $table->json('bank_details')->nullable();
            $table->string('type');
            $table->boolean('all_validation_passed')->nullable();
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
        Schema::dropIfExists('bank_account_verifications');
    }
}
