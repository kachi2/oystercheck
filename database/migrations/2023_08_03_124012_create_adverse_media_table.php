<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdverseMediaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('adverse_media', function (Blueprint $table) {
            $table->id();
            $table->foreignId('verification_id')->constrained('verifications');
            $table->foreignId('user_id')->constrained('users');
            $table->string('ref');
            $table->text('query')->nullable();
            $table->text('reason')->nullable();
            $table->string('weightedScore')->nullable();
            $table->string('status')->nullable();
            $table->text('queryTags')->nullable();
            $table->dateTime('queryStartDate')->nullable();
            $table->dateTime('queryEndDate')->nullable();
            $table->string('total')->nullable();
            $table->longText('media')->nullable();
            $table->longText('tagsAnalysis')->nullable();
            $table->string('type')->nullable();
            $table->string('metadata')->nullable();
            $table->string('links')->nullable();
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
        Schema::dropIfExists('adverse_media');
    }
}
