<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShopsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shops', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('slug');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->softDeletes();
            $table->timestamps();
            $table->string('profile_pic');
            $table->string('gstin');
            $table->bigInteger('phone');
            $table->tinyInteger('pickup');
            $table->tinyInteger('delivery');
            $table->tinyInteger('active');
            $table->bigInteger('created_by');
            $table->unsignedBigInteger('state_id');
            $table->foreign('state_id')->references('id')->on('states')->onDelete('cascade');
            $table->string('address_line_1');
            $table->string('address_line_2');
            $table->string('pin_code');
            $table->longText('landmark');
            $table->double('lat',8,2);
            $table->double('lng',8,2);
            $table->bigInteger('city_id');
            $table->string('hash_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('shops');
    }
}
