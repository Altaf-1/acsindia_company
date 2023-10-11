<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTestSeriesQuizResultsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('test_series_quiz_results', function (Blueprint $table) {
            $table->id();
            $table->integer('test_series_quiz_id');
            $table->integer('user_id')->unsigned()->nullable();
            $table->string('course_name');
            $table->string('total_mark')->nullable();
            $table->string('correct_answers')->nullable();
            $table->string('wrong_answers')->nullable();
            $table->string('date')->nullable();
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
        Schema::dropIfExists('test_series_quiz_results');
    }
}
