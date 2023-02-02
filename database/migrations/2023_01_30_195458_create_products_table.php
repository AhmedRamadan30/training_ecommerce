<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
//            name, description, slug, thumbnail, gallery
            $table->string('name');
            $table->text('description');
            $table->string('slug');
            $table->string('thumbnail', 500);
            $table->text('gallery');
            $table->unsignedBigInteger('category_id')->nullable();
            $table->foreign('category_id')->on('categories')->references('id')->cascadeOnUpdate()->cascadeOnDelete();
            $table->unsignedBigInteger('brand_id')->nullable();
            $table->foreign('brand_id')->on('brands')->references('id')->cascadeOnUpdate()->cascadeOnDelete();
            $table->boolean('featured')->default(0);
            $table->boolean('published')->default(0);
            $table->double('price', 8, 2);
            $table->double('discount')->default(0);
            $table->string('discount_type')->nullable();
            $table->string('meta_title', 500)->nullable();
            $table->text('meta_description')->nullable();
            $table->string('meta_image', 500)->nullable();
            $table->text('meta_keywords')->nullable();

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
};
