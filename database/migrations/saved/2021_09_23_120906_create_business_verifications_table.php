<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBusinessVerificationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('business_verifications', function (Blueprint $table) {
            $table->id();
            $table->string('verification_id')->nullable();
            $table->string('ref')->nullable();
            $table->string('user_id')->nullable();
            $table->string('status')->nullable();
            $table->string('service_ref')->nullable();
            $table->double('fee')->nullable();
            $table->double('discount')->nullable();
            $table->string('slug')->nullable();
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
        Schema::dropIfExists('business_verifications');
    }
}
