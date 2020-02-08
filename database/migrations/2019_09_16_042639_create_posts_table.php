<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('topic')->nullable()->default(null);
            $table->string('author')->nullable()->default(null);
            $table->unsignedBigInteger('post_category_id');
            $table->foreign('post_category_id')->references('id')->on('post_categories')->onDelete('restrict');
            $table->string('image1')->nullable()->default(null);
            $table->text('body')->nullable()->default(null);
            $table->softDeletes();
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
        Schema::dropIfExists('posts');
    }
}
