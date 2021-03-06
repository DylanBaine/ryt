<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBandsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bands', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->unique();
            $table->string('email');
            $table->string('password');
            $table->text('genre');
            $table->string('slug');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('phone');
            $table->string('profile_image')->default('default.png');
            $table->string('banner_image')->default('default.png');
            $table->string('location')->nullable();
            $table->string('facebook')->nullable();
            $table->string('twitter')->nullable();
            $table->text('bio')->nullable(); 
            $table->string('soundcloud')->nullable();
            $table->string('email_hidden')->default('yes');           
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
        Schema::drop('bands');
    }
}
