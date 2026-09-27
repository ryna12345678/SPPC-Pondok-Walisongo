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
    Schema::create('presensi', function (Blueprint $table) {
        $table->id('id_presensi');

        $table->foreignId('id_santri')
            ->constrained('santri','id_santri')
            ->cascadeOnDelete();

        $table->foreignId('id_catering')
            ->constrained('catering','id_catering')
            ->cascadeOnDelete();

        $table->enum('status',['Hadir','Belum Hadir']);
        $table->timestamp('waktu_scan')->nullable();

        $table->timestamps();
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('presensi');
    }
};
