<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewVideosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('new_videos', function (Blueprint $table) {
            $table->id();
            $table->string('topic');
            $table->string('sub_topic');
            $table->string('title');
            $table->string('video');
            $table->string('course');
            $table->string('date')->nullable();
            $table->string('knowledge')->nullable();
            $table->string('download')->nullable();
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
        Schema::dropIfExists('new_videos');
    }
}
