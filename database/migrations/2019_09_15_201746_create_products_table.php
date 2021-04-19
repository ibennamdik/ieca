<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('brand_id');
            $table->unsignedBigInteger('width_id');
            $table->unsignedBigInteger('rim_id');
            //$table->unsignedBigInteger('speed_id');
            
            $table->unsignedBigInteger('tyre_profile_id');
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('restrict');
            $table->foreign('brand_id')->references('id')->on('brands')->onDelete('restrict');
            $table->foreign('width_id')->references('id')->on('widths')->onDelete('restrict');
            $table->foreign('rim_id')->references('id')->on('rims')->onDelete('restrict');
            $table->foreign('tyre_profile_id')->references('id')->on('tyre_profiles')->onDelete('restrict');
           
            $table->string('name')->nullable()->default(null);
            $table->string('size')->nullable()->default(null);
            $table->string('description')->nullable()->default(null);
            $table->string('rating')->nullable()->default(null);
            $table->string('image1')->nullable()->default(null);
            $table->string('image2')->nullable()->default(null);
            $table->string('quantity')->nullable()->default(null);
            $table->string('amount')->nullable()->default(null);
            $table->string('orders_count')->default(0);
            $table->boolean('visibility')->default(true);
            
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
        Schema::dropIfExists('products');
    }
}
