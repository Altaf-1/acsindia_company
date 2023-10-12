<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClassVideosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('class_videos', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('video');
            $table->string('course');
            $table->string('date')->nullable();
            $table->string('knowledge')->nullable();
            $table->string('download')->nullable();
            $table->string('type')->nullable();
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
        Schema::dropIfExists('class_videos');
    }
}