<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTinVerificationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tin_verifications', function (Blueprint $table) {
            $table->id();
            $table->foreignId('verification_id')->constrained('verifications');
            $table->foreignId('user_id')->constrained('users');
            $table->string('ref');
            $table->string('service_reference')->nullable();
            $table->boolean('subject_consent');
            $table->string('status');
            $table->string('type');
            $table->string('fee')->nullable();
            $table->string('search_term')->nullable();
            $table->string('search_value')->nullable();
            $table->string('name')->nullable();
            $table->string('registration_number')->nullable();
            $table->string('tin')->nullable();
            $table->string('jtb_tin')->nullable();
            $table->string('tax_office')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('requested_at')->nullable();
            $table->string('last_modified_at')->nullable();
            $table->string('country')->nullable();
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
        Schema::dropIfExists('tin_verifications');
    }
}
