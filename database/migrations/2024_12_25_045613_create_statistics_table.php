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
        Schema::create('statistics', function (Blueprint $table) {
            $table->id();
            $table->foreignId('regency_id')->constrained('regencies')->onUpdate('cascade')->onDelete('cascade');
            $table->year('year')->nullable();
            $table->decimal('area_sq_km', 10, 2)->nullable();
            $table->integer('population')->nullable();
            $table->decimal('regional_minimum_wage', 15, 2)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('statistics');
    }
};
