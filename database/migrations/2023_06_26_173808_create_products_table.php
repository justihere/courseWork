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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->integer('category_id');
            $table->string('product_name');
            $table->float('product_price');
            $table->string('product_img');
        });

        DB::table('products')->insert([
            [
                'product_name' => 'Сумки плетені',
                'category_id' => 1,
                'product_price' => 4000,
                'product_img' => 'images/d694aea1226f9276d2ed3f72081e7835.jpg',
            ],
            [
                'product_name' => 'Сумка вишита',
                'category_id' => 2,
                'product_price' => 3000,
                'product_img' => 'images/1cba8dbb02ab29f0315a81a6cd33973a.jpg',
            ],
            [
                'product_name' => 'Подушка',
                'category_id' => 3,
                'product_price' => 2000,
                'product_img' => 'images/c150060776ae89b13e339aa0e48d8f17.jpg',
            ],
            [
                'product_name' => 'Квітка',
                'category_id' => 4,
                'product_price' => 500,
                'product_img' => 'images/38323f73d6a210e0d96dd3cef60460be.jpg',
            ],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
