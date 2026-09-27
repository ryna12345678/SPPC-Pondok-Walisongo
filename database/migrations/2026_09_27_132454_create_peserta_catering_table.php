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
    Schema::create('peserta_catering', function (Blueprint $table) {
        $table->id('id_peserta');
        $table->foreignId('id_santri')
              ->constrained('santri','id_santri')
              ->cascadeOnDelete();
        $table->string('status',20)->default('aktif');
        $table->timestamps();
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('peserta_catering');
    }
};
