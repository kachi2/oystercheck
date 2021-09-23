<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddNewFeldsToIdentityVerificationDetails extends Migration
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
            $table->string('profession')->nullable();
            $table->string('birth_state')->nullable();
            $table->string('residence_state')->nullable();
            $table->string('tracking_id')->nullable();
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
