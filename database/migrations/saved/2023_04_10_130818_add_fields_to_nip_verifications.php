<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFieldsToNipVerifications extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('nip_verifications', function (Blueprint $table) {
            //
            $table->integer('is_sandbox')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('nip_verifications', function (Blueprint $table) {
            //
            $table->dropColumn('is_sandbox');
        });
    }
}
