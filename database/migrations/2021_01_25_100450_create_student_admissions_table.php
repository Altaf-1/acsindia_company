<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentAdmissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_admissions', function (Blueprint $table) {
            $table->id();
            $table->string('admission_no');
            $table->string('roll_no');
            $table->string('class');
            $table->string('std_name');
            $table->string('std_email');
            $table->string('std_phone');
            $table->date('std_dob');
            $table->string('std_gender');
            $table->string('std_state');
            $table->string('std_district');
            $table->string('std_category');
            $table->string('std_photo')->nullable();
            $table->date('admission_date');
            $table->string('guardian_name');
            $table->string('relation');
            $table->string('guardian_phone');
            $table->string('guardian_email');
            $table->string('course');
            $table->bigInteger('course_price');
            $table->bigInteger('discount_amount');
            $table->bigInteger('course_fee_pay');
            $table->string('pay_mode');
            $table->string('branch')->nullable();
            $table->unsignedBigInteger('refer_code_id')->nullable();
            $table->bigInteger('refer_discount')->nullable();
            $table->bigInteger('course_pending');
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
        Schema::dropIfExists('student_admissions');
    }
}