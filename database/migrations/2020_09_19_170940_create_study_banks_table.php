<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudyBanksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('study_banks', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('study_material_id');
            $table->unsignedBigInteger('user_id');
            $table->string('payment_type');
            $table->string('receipt');
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
        Schema::dropIfExists('study_banks');
    }
}
