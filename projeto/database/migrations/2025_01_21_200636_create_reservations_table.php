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
        Schema::create('reservations', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->unsignedBigInteger('shows_id');
            $table->foreign('shows_id')->references('id')->on('shows')->onDelete('cascade');
            $table->unsignedBigInteger('armchairs');
            $table->foreign('armchairs_id')->references('id')->on('armchairs')->onDelete('cascade');;
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservations');
    }
};
