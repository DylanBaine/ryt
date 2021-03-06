<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBandReviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('band_reviews', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('band_id');
            $table->string('reviewer');
            $table->string('reviewer_relationship');
            $table->tinyInteger('stars');
            $table->text('review');
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
        Schema::dropIfExists('band_reviews');
    }
}
