<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOnlineQuizQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('online_quiz_questions', function (Blueprint $table) {
            $table->id();
            $table->integer('online_quiz_id');
            $table->longText('question')->nullable();
            $table->longText('option1');
            $table->longText('option2');
            $table->longText('option3');
            $table->longText('option4');
            $table->longText('explanation1')->nullable();
            $table->longText('explanation2')->nullable();
            $table->longText('explanation3')->nullable();
            $table->longText('explanation4')->nullable();
            $table->longText('correct_option')->nullable();
            $table->longText('note')->nullable();
            $table->bigInteger('point')->default(0);
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
        Schema::dropIfExists('online_quiz_questions');
    }
}
