<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCandidateVerificationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('candidate_verifications', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->nullable();
            $table->integer('client_id')->nullable();
            $table->integer('candidate_services_id')->nullable();
            $table->string('status')->nullable();
            $table->integer('is_paid')->nullable();
            $table->text('doc')->nullable();
            $table->string('QA_approved')->nullable();
            $table->string('QA_review')->nullable();
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
        Schema::dropIfExists('candidate_verifications');
    }
}
