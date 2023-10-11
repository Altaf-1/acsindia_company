<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecordedBanksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recorded_banks', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('recorded_id');
            $table->unsignedBigInteger('user_id');
            $table->string('payment_type');
            $table->string('receipt');
            $table->string('status')->default(0);$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('recorded_banks');
    }
}
