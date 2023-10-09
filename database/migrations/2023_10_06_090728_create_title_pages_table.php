<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTitlePagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('title_pages', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('subtitle_project')->nullable();
            $table->string('title_project')->nullable();
            $table->string('title_product')->nullable();
            $table->string('title_client')->nullable();
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
        Schema::dropIfExists('title_pages');
    }
}
