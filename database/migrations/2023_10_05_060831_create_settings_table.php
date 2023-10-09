<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('logo')->nullable();
            $table->string('alt_logo')->nullable();
            $table->string('logo_title')->nullable();
            $table->string('phone1')->nullable();
            $table->string('tel1')->nullable();
            $table->string('phone2')->nullable();
          
            $table->string('email1')->nullable();
            $table->string('email2')->nullable();
            $table->text('location')->nullable();
            $table->text('map')->nullable();
            $table->text('whatsap_link')->nullable();
        
            $table->text('instagram')->nullable();
            $table->text('linkedin')->nullable();
            $table->text('scrollToLink')->nullable();
            $table->text('scrollToLinkText')->nullable();
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
        Schema::dropIfExists('settings');
    }
}
