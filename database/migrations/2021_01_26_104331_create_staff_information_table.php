<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStaffInformationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staff_information', function (Blueprint $table) {
            $table->id();
            $table->string('staff_id');
            $table->string('role');
            $table->bigInteger('basic');
            $table->string('name');
            $table->string('email');
            $table->string('phone');
            $table->string('gender');
            $table->date('dob');
            $table->date('doj');
            $table->string('address');
            $table->string('qualifications');
            $table->string('work_experience');
            $table->string('guardian_name');
            $table->string('relation');
            $table->string('guardian_phone');
            $table->string('guardian_email');
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
        Schema::dropIfExists('staff_information');
    }
}
