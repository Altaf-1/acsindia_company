<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePointsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('points', function (Blueprint $table) {
            $table->id();
            $table->string('staff_id')->index();
            $table->date('month');
            $table->double('punctuality');
            $table->mediumText('punctuality_reason')->nullable();
            $table->double('leave');
            $table->mediumText('leave_reason')->nullable();
            $table->double('work');
            $table->mediumText('work_reason')->nullable();
            $table->double('director');
            $table->mediumText('director_reason')->nullable();
            $table->double('total');
            $table->string('overall');
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
        Schema::dropIfExists('points');
    }
}
