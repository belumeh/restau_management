<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('incomes', function (Blueprint $table) {
            $table->increments('income_id');
            $table->unsignedInteger('order_id')->unsigned()->nullable();
            $table->unsignedInteger('payment_id')->unsigned()->nullable();
            $table->foreign('order_id')->references('order_id')->on('order');
            $table->foreign('payment_id')->references('payment_id')->on('payments');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('incomes');
    }
};
