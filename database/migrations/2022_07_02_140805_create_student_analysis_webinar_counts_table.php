<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentAnalysisWebinarCountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_analysis_webinar_counts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('student_analysis_id');
            $table->string('webinar_name');
            $table->boolean('is_attended')->default(false);
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
        Schema::dropIfExists('student_analysis_webinar_counts');
    }
}
