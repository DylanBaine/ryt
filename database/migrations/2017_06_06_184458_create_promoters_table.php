<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePromotersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('promoters', function (Blueprint $table) {
            $table->increments('id');
            $table->string('agency_name')->unique();
            $table->string('email');
            $table->string('password');
            $table->text('genre');
            $table->string('slug');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('phone');
            $table->string('profile_image')->default('default.jpg');
            $table->string('banner_image')->default('default.jpg');
            $table->string('email_hidden')->default('yes');
            $table->string('facebook')->nullable();
            $table->string('twitter')->nullable();            
            $table->text('bio')->nullable();
            $table->string('location')->nullable();
            $table->text('experience')->nullable();
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
        Schema::drop('promoters');
    }
}
