<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIdentityVerificationDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('identity_verification_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('identity_verification_id')->constrained()->cascadeOnDelete();
            $table->string('external_ref')->nullable();
            $table->string('first_name')->nullable();
            $table->string('middle_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('dob')->nullable();
            $table->string('phone')->nullable();
            $table->text('image_path')->nullable();
            $table->text('payload')->nullable();
            $table->string('reference')->nullable();
            $table->string('slug')->nullable();
            $table->dateTime('expires_at')->nullable();
            $table->string('country')->nullable();
            $table->string('document_number')->nullable();
            $table->string('educational_level')->nullable();
            $table->string('employment_status')->nullable();
            $table->string('gender')->nullable();
            $table->string('marital_status')->nullable();
            $table->string('place_of_issue')->nullable();
            $table->string('expiry_date')->nullable();
            $table->string('issue_date')->nullable();
            $table->string('state')->nullable();
            $table->string('profession')->nullable();
            $table->string('birth_state')->nullable();
            $table->string('residence_state')->nullable();
            $table->string('tracking_id')->nullable();
            $table->foreignId('user_id')->nullable();
            $table->string('tax_identification_number')->nullable();
            $table->string('first_state_of_issuance')->nullable();
            $table->string('religion')->nullable();
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
        Schema::dropIfExists('identity_verification_details');
    }
}
