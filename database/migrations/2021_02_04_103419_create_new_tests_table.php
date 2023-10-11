<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewTestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('new_tests', function (Blueprint $table) {
            $table->id();
            $table->string('topic');
            $table->string('sub_topic');
            $table->string('title');
            $table->string('course');
            $table->date('date');
            $table->string('duration');
            $table->string('link');
            $table->string('total_marks')->nullable();
            $table->text('note')->nullable();
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
        Schema::dropIfExists('new_tests');
    }
}
