<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFieldsToAddressVerifications extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('address_verifications', function (Blueprint $table) {
            //
            $table->string('first_name')->after('user_id')->nullable();
            $table->string('last_name')->after('first_name')->nullable();
            $table->string('email')->after('last_name')->nullable();
            $table->string('phone')->after('email')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('address_verifications', function (Blueprint $table) {
            //
            $table->dropColumn('first_name');
            $table->dropColumn('last_name');
            $table->dropColumn('email');
            $table->dropColumn('phone');
        });
    }
}
