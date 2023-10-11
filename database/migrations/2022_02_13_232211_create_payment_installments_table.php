<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentInstallmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payment_installments', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->unsignedBigInteger('course_id')->index();
            $table->unsignedBigInteger('unique_course_id');
            $table->unsignedBigInteger('user_id')->index();
            $table->unsignedBigInteger('amount_paid')->nullable();
            $table->string('receipt_image');
            $table->string('status')->default(0);
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
        Schema::dropIfExists('payment_installments');
    }
}
