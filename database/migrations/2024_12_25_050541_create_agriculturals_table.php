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
        Schema::create('agriculturals', function (Blueprint $table) {
            $table->id();
            $table->foreignId('regency_id')->constrained('regencies')->onUpdate('cascade')->onDelete('cascade');
            $table->year('year')->nullable();
            $table->integer('pest_incidence')->nullable();
            $table->decimal('land_area_ha', 10, 2)->nullable();
            $table->decimal('planted_area_ha', 10, 2)->nullable();
            $table->decimal('production', 15, 2)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('agriculturals');
    }
};
