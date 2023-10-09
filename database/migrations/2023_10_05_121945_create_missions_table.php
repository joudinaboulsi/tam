<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('missions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title_mission')->nullable();
            $table->longText('content_mission')->nullable();

            $table->string('title1')->nullable();
            $table->longText('p1')->nullable();

            $table->string('title2')->nullable();
            $table->longText('p2')->nullable();

            $table->string('title3')->nullable();
            $table->longText('p3')->nullable();

            $table->string('title4')->nullable();
            $table->longText('p4')->nullable();
            $table->string('btn')->nullable();
            $table->string('scrollTo')->nullable();
            
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
        Schema::dropIfExists('missions');
    }
}
