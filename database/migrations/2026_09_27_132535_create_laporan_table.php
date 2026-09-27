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
    Schema::create('laporan', function (Blueprint $table) {
        $table->id('id_laporan');

        $table->foreignId('id_catering')
              ->constrained('catering','id_catering')
              ->cascadeOnDelete();

        $table->integer('total_hadir');
        $table->integer('total_tidak_hadir');

        $table->timestamps();
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('laporan');
    }
};
