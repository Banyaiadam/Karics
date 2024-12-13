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
        Schema::create('Wishlists', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('people_id');
            $table->foreign('people_id')->references('id')->on('people')->onDelete('cascade');
            $table->string("wishlists_name");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Wishlists');
    }
};
