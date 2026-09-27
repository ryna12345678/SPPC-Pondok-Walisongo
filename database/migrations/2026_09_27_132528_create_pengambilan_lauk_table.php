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
    Schema::create('pengambilan_lauk', function (Blueprint $table) {
        $table->id('id_pengambilan');

        $table->foreignId('id_presensi')
              ->constrained('presensi','id_presensi')
              ->cascadeOnDelete();

        $table->integer('jumlah_lauk')->default(1);

        $table->timestamps();
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengambilan_lauk');
    }
};
