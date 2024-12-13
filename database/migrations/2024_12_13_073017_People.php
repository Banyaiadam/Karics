<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    
    public function up(): void
    {
        Schema::create('People', function (Blueprint $table) {
            $table->id();
            $table->string("person_name");
            $table->string("email");
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('People');
    }
};