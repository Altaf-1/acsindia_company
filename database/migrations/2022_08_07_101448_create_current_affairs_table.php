<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCurrentAffairsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('current_affairs', function (Blueprint $table) {
            $table->id();
            $table->string('title')->index();
            $table->mediumText('long_title');
            $table->longText('content');
            $table->string('image_thumbnail')->nullable();
            $table->string('image')->nullable();
            $table->string('year');
            $table->string('type');
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
        Schema::dropIfExists('current_affairs');
    }
}
