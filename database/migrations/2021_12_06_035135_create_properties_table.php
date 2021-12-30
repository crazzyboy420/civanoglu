<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('name_bn');
            $table->string('feature_img');
            $table->unsignedBigInteger('price');
            $table->unsignedBigInteger('location');
            $table->unsignedBigInteger('sale')->default(1)->comment('0=rent,1=buy');
            $table->unsignedBigInteger('type')->default(1)->comment('0=land,1=apartment,2=villa');
            $table->unsignedBigInteger('bedrooms')->nullable();
            $table->unsignedBigInteger('drowing_room')->nullable();
            $table->unsignedBigInteger('bathrooms')->nullable();
            $table->unsignedBigInteger('gross_sqm')->nullable();
            $table->unsignedBigInteger('net_sqm')->nullable();
            $table->unsignedBigInteger('pool')->nullable()->comment('0=No,1=private,2=public,3=Both');
            $table->string('overview');
            $table->string('overview_bn');
            $table->longText('why_buy')->nullable();
            $table->longText('why_buy_bn')->nullable();
            $table->longText('description');
            $table->longText('description_bn');
            $table->timestamps();

            //$table->foreign('featured_media_id')->references('id')->on('media');
            $table->foreign('location')->references('id')->on('locations');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('properties');
    }
}
