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
        Schema::create('saved_bookings', function (Blueprint $table) {
            $table->id('savedBookings_id');
            $table->unsignedBigInteger('b_id');
            $table->unsignedBigInteger('u_id');
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
        Schema::dropIfExists('saved_bookings');
    }
};
