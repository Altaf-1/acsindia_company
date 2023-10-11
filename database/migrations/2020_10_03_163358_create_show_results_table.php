<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShowResultsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('show_results', function (Blueprint $table) {
            $table->id();
            $table->string('test_name');
            $table->date('date');
            $table->string('course');
            $table->string('percentage');
            $table->string('name');
            $table->string('state');
            $table->string('rank');
            $table->string('image')->nullable();
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
        Schema::dropIfExists('show_results');
    }
}
