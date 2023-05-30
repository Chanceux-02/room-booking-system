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
        Schema::create('reviews', function (Blueprint $table) {
            $table->id('ratings_id');
            $table->unsignedBigInteger('b_id');
            $table->unsignedBigInteger('u_id');
            $table->text('comment');
            $table->integer('rating');
            $table->timestamps();

            $table->foreign('b_id')->references('b_id')->on('bookings')->onDelete('cascade');
            $table->foreign('u_id')->references('u_id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reviews');
    }
};
