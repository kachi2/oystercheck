<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            
            $table->string('ref')->nullable();
            $table->foreignId('user_id')->constrained();
            $table->string('external_ref')->nullable();
            $table->string('purpose')->nullable();
            $table->string('service_type')->nullable();
            $table->string('type')->nullable();
            $table->double('total_amount_payable');
            $table->double('amount');
            $table->double('tax')->nullable();
            $table->double('discount')->nullable();
            $table->string('currency')->default('NGN');
            // $table->double('prev_balance')->nullable();
            // $table->double('avail_balance')->nullable();
            $table->string('status')->nullable(); //processing, reversed, failed, successful, declined, abandoned
            $table->string('payment_method');
            $table->string('paid_at')->nullable();
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
        Schema::dropIfExists('transactions');
    }
}
