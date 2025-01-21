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
        Schema::create('armchairs', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedTinyInteger('quantity');
            $table->unsignedBigInteger('shows_id');
            $table->foreign('shows_id')->references('id')->on('shows')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('armchairs');
    }
};
