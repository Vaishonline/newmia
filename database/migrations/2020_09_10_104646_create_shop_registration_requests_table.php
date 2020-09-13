<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShopRegistrationRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shop_registration_requests', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('owner_name',100);
            $table->char('phone',10);
            $table->string('name',100);
            $table->string('slug',10);
            $table->string('address_line_1',100);
            $table->string('address_line_2',100);
            $table->string('pin_code',6);
            $table->string('referer_name',100);
            $table->string('comment');
            $table->char('referer_phone',10);
            $table->tinyInteger('is_referer');
            $table->unsignedBigInteger('state_id');
            $table->foreign('state_id')->references('id')->on('states')->onDelete('cascade');
            $table->unsignedBigInteger('city_id');
            $table->foreign('city_id')->references('id')->on('cities')->onDelete('cascade');
            $table->softDeletes();

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
        Schema::dropIfExists('shop_registration_requests');
    }
}
