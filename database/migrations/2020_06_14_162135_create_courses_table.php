<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->index();
            $table->bigInteger('course_id')->unsigned()->index();
            $table->text('description');
            $table->string('timing');
            $table->string('days');
            $table->bigInteger('price');
            $table->bigInteger('sale')->nullable();
            $table->string('url');
            $table->string('image');
            $table->integer('active')->default(1);
            $table->string('discount')->nullable();
            $table->boolean('is_gst')->default(1);
            $table->boolean('use_coupon')->default(0);
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
        Schema::dropIfExists('courses');
    }
}
