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
            $table->bigIncrements('id')->unique();
            $table->string('first_name');
            $table->string('slug');
            $table->string('email');
            $table->bigInteger('phone');
            $table->timestamp('email_verified_at');
            $table->string('password')->nullable();
            $table->string('remember_token',100);
            $table->unsignedBigInteger('role_id');
            $table->foreign('role_id')->references('id')->on('roles')->onDelete('cascade');
            $table->softDeletes();
            $table->timestamps();
            $table->string('profile_pic');
            $table->string('token');
            $table->dateTime('phone_verified_at');
            $table->string('last_name',50);
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
