<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAboutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('abouts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('subtitle_about')->nullable();
            $table->text('title_about')->nullable();
            $table->string('image')->nullable();
            $table->string('alt_image')->nullable();
            $table->string('image1')->nullable();
            $table->string('alt_image1')->nullable();
            $table->text('content_about')->nullable();
            $table->string('pdf')->nullable();
            $table->string('btn_text')->nullable();
         
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
        Schema::dropIfExists('abouts');
    }
}
