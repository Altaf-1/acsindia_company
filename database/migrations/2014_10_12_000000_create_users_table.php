<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->bigInteger('phone');
            $table->string('subject')->nullable();
            $table->string('state');
            $table->bigInteger('alternate_phone')->nullable();
            $table->bigInteger('pincode')->nullable();
            $table->string('landmark')->nullable();
            $table->string('city')->nullable();
            $table->string('district')->nullable();
            $table->string('postal')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->unsignedBigInteger('photo_id')->nullable();
            $table->string('role')->default('user');
            $table->string('care_of')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}