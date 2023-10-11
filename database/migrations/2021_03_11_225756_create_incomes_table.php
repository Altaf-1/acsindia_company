<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIncomesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('incomes', function (Blueprint $table) {
            $table->id();
            $table->string('staff_id')->index();
            $table->bigInteger('basic');
            $table->date('month');
            $table->bigInteger('earning');
            $table->mediumText('earning_reason');
            $table->bigInteger('deduction');
            $table->mediumText('deduction_reason');
            $table->bigInteger('net_salary');
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
        Schema::dropIfExists('incomes');
    }
}
