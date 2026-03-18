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
        Schema::create('service_orders', function (Blueprint $table) {
            $table->id();
            $table->string('number')->unique(); // Ex: OS-2026-0001
            $table->foreignId('person_id')->constrained()->cascadeOnDelete();
            $table->foreignId('equipment_id')->constrained()->cascadeOnDelete();
            $table->foreignId('person_type_id')->nullable()->constrained()->nullOnDelete();
            $table->text('problem_reported');
            $table->text('diagnosis')->nullable();
            $table->text('technical_notes')->nullable();
            $table->string('status')->default('open');
            $table->string('priority')->default('normal'); // low | normal | high | urgent
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('service_orders');
    }
};
