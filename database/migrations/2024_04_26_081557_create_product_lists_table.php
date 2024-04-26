<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('product_lists', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('price');
            $table->string('special_price');
            $table->string('image');
            $table->integer('categoriesID'); // relasi ke categories table
            // $table->string('category');
            $table->integer('subcategoriesID'); // relasi ke subcategories table
            // $table->string('subcategory');
            $table->string('remark');
            $table->string('star');
            $table->string('product_code');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_lists');
    }
};
