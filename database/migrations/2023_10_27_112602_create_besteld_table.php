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
        //         Schema::create('besteld', function (Blueprint $table) {
        //     $table->id();
        //     $table->unsignedBigInteger('product_id'); // Change this line
        //     $table->unsignedBigInteger('cart_id');
        //     $table->integer('quantity')->default(1);
        //     $table->timestamps();
    
        //     $table->foreign('product_id')->references('id')->on('producten')->onDelete('cascade'); // Change this line
        //     $table->foreign('cart_id')->references('id')->on('orders')->onDelete('cascade');
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('besteld');
    }
};
