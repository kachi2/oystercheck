<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeeRefAnswersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee_ref_answers', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->nullable();
            $table->foreignId('candidate_verification_id')->constrained();
            $table->integer('employee_reference_id')->nullable();
            $table->integer('employee_ref_question_id')->nullable();
            $table->tinyText('answer')->nullable();
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
        Schema::dropIfExists('employee_ref_answers');
    }
}
