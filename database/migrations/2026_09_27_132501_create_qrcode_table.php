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
    Schema::create('qrcode', function (Blueprint $table) {
        $table->id('id_qrcode');
        $table->foreignId('id_santri')
              ->constrained('santri','id_santri')
              ->cascadeOnDelete();
        $table->string('kode_qr')->unique();
        $table->timestamps();
    });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('qrcode');
    }
};
