<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVenuesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('venues', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('slug');
            $table->string('email');
            $table->string('password');
            $table->string('venue_title')->unique();
            $table->string('address')->nullable();
            $table->string('lat')->nullable();
            $table->string('long')->nullable();
            $table->string('phone_number')->nullable();
            $table->string('website')->nullable();
            $table->string('age')->nullable();
            $table->string('capacity')->nullable();
            $table->string('booking_number')->nullable();
            $table->string('booking_email')->nullable();
            $table->string('category')->nullable();
            $table->string('category_slug')->nullable();
            $table->string('country')->nullable();
            $table->string('country_slug')->nullable(); 
            $table->string('account_permissions')->default('basic');
            $table->text('amenities')->nullable();
            $table->string('profile_image')->default('default.png');
            $table->string('banner_image')->default('default.png');
            $table->string('gallery_one')->nullable();
            $table->string('gallery_two')->nullable();
            $table->string('gallery_three')->nullable();
            $table->string('gallery_four')->nullable();
            $table->string('gallery_five')->nullable();
            $table->string('gallery_six')->nullable();
            $table->string('facebook')->nullable();
            $table->string('twitter')->nullable();
            $table->string('instagram')->nullable();
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
        Schema::drop('venues');
    }
}



