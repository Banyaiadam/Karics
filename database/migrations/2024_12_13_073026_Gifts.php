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
        Schema::create('Gifts', function (Blueprint $table) {
            $table->id();
            $table->string("gift_name");
            $table->integer("price");
            $table->unsignedBigInteger('gift-types_id');
            $table->foreign('gift-types_id')->references('id')->on('gift-types')->onDelete('cascade');
        });
    }

 
    public function down(): void
    {
        Schema::dropIfExists('Gifts');
    }
};
