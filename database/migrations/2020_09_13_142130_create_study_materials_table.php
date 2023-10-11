<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudyMaterialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('study_materials', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->index();
            $table->bigInteger('course_id')->unsigned()->index();
            $table->text('description');
            $table->bigInteger('price');
            $table->string('image');
            $table->integer('active')->default(1);
            $table->text('front_options')->nullable();
            $table->text('options')->nullable();
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
        Schema::dropIfExists('study_materials');
    }
}
