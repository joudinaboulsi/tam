<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('subtitle_service')->nullable();
            $table->text('title_service')->nullable();
            $table->text('content_service')->nullable();
            $table->string('icon1')->nullable();
            $table->string('image1')->nullable();
            $table->string('alt_image1')->nullable();
            $table->string('subtitle1')->nullable();
            $table->string('icon2')->nullable();
            $table->string('subtitle2')->nullable();
            $table->string('image2')->nullable();
            $table->string('alt_image2')->nullable();
            $table->string('icon3')->nullable();
            $table->string('subtitle3')->nullable();
            $table->string('image3')->nullable();
            $table->string('alt_image3')->nullable();
            $table->string('icon4')->nullable();
            $table->string('alt_icon4')->nullable();
            $table->string('subtitle4')->nullable();
            $table->string('image4')->nullable();
            $table->string('alt_image4')->nullable();
            $table->string('alt_icon1')->nullable();
            $table->string('alt_icon2')->nullable();
            $table->string('alt_icon3')->nullable();

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
        Schema::dropIfExists('services');
    }
}
