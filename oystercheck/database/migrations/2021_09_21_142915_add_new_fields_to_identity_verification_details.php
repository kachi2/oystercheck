<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddNewFieldsToIdentityVerificationDetails extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('identity_verification_details', function (Blueprint $table) {
            //
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

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('identity_verification_details', function (Blueprint $table) {
            //
        });
    }
}
