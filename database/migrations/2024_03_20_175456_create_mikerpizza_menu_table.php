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
        Schema::create('mikerpizza_menu', function (Blueprint $table) {
            $table->id();
            $table->string('Menu_name');
            $table->string('Menu_desc');
            $table->string('Menu_price');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mikerpizza_menu');
    }
};
