<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->increments('id');
            $table->string('date')->nullable();
            $table->string('payment_id')->nullable();
            $table->string('payment_request_id')->nullable();
            $table->string('plan_id')->nullable();
            $table->string('profile_id')->nullable();
            $table->string('profile_name')->nullable();
            $table->string('profile_mobile')->nullable();
            $table->string('profile_email')->nullable();
            $table->string('plan_name')->nullable();
            $table->string('plan_amount')->nullable();
            $table->string('next_due_date')->nullable();
            $table->string('status')->nullable();
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
        Schema::dropIfExists('payments');
    }
}
