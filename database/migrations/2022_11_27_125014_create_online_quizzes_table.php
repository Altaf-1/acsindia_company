<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOnlineQuizzesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('online_quizzes', function (Blueprint $table) {
            $table->id();
            $table->string('quiz_name');
            $table->string('description');
            $table->string('status');
            $table->string('set')->nullable();
            $table->string('quiz_date')->nullable();
            $table->string('total_time')->nullable();
            $table->string('pdf');
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
        Schema::dropIfExists('online_quizzes');
    }
}
