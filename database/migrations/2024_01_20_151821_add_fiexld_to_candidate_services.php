<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFiexldToCandidateServices extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('candidate_services', function (Blueprint $table) {
            // //
            // $table->integer('required_external_verify')->nullable();
            // $table->string('request_status')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('candidate_services', function (Blueprint $table) {
            //
            
        });
    }
}
