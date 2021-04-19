<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id')->unique();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

            $table->unsignedBigInteger('status_id');
            $table->foreign('status_id')->references('id')->on('statuses')->onDelete('restrict');

            $table->string('phone_number')->nullable()->default(null);;
            $table->string('birth_date')->nullable()->default(null);;
            $table->string('state')->nullable()->default(null);;
            $table->string('country')->nullable()->default(null);;
            $table->string('address')->nullable()->default(null);
            $table->string('avatar')->nullable()->default(null);
            
            $table->string('question')->nullable()->default(null);
            $table->string('answer')->nullable()->default(null);
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
        Schema::dropIfExists('profiles');
    }
}
