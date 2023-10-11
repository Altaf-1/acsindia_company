<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonalMentorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personal_mentors', function (Blueprint $table) {
            $table->id();
            $table->mediumText('course_name');
            $table->string('day1')->nullable();
            $table->string('day2')->nullable();
            $table->string('day3')->nullable();
            $table->string('day4')->nullable();
            $table->string('day5')->nullable();
            $table->string('day6')->nullable();
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
        Schema::dropIfExists('personal_mentors');
    }
}
