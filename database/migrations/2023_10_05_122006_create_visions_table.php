<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVisionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('visions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('subtitle_vision')->nullable();
            $table->string('title_vision')->nullable();
            $table->text('content_vision')->nullable();
            $table->string('image')->nullable();
            $table->string('alt_image')->nullable();
          
            $table->string('count1')->nullable();
            $table->string('count2')->nullable();
            $table->string('count3')->nullable();
            $table->string('count4')->nullable();
            $table->string('count5')->nullable();
            $table->string('title1')->nullable();
            $table->string('title2')->nullable();
            $table->string('title3')->nullable();
            $table->string('title4')->nullable();
            $table->string('title5')->nullable();
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
        Schema::dropIfExists('visions');
    }
}
