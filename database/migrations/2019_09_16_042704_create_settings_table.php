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
            $table->string('appname')->nullable()->default(null);
            $table->string('logo')->nullable()->default(null);
            $table->string('address')->nullable()->default(null);
            $table->string('phone1')->nullable()->default(null);
            $table->string('phone2')->nullable()->default(null);
            $table->string('email')->nullable()->default(null);
            $table->string('web_url')->nullable()->default(null);
            $table->string('facebook_url')->nullable()->default(null);
            $table->string('instagram_url')->nullable()->default(null);
            $table->string('twitter_url')->nullable()->default(null);
            $table->string('youtube_url')->nullable()->default(null);
            $table->string('slide1')->nullable()->default(null);
            $table->string('slide2')->nullable()->default(null);
            $table->string('slide3')->nullable()->default(null);
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
