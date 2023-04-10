<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFieldToCandidates extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('candidates', function (Blueprint $table) {
        $table->after('user_id', function($table){
            $table->string('email');
            $table->string('password');
            $table->boolean('email_verified')->nullable();
            $table->dateTime('email_verified_at')->nullable();
            $table->rememberToken();
        });

        });
           
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('candidates', function (Blueprint $table) {
            $table->dropColumn(['user_id']);
           // $table->dropRememberToken();
        });
    }
}
