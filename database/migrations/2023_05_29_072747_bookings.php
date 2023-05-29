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
        Schema::create('bookings', function (Blueprint $table) {
            $table->id('b_id');
            $table->unsignedBigInteger('u_id');
            $table->unsignedBigInteger('r_id');
            $table->foreign('u_id')->references('u_id')->on('users')->onDelete('cascade');
            $table->foreign('r_id')->references('r_id')->on('resources')->onDelete('cascade');
            $table->string('name');
            $table->longText('description');
            $table->string('price');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
