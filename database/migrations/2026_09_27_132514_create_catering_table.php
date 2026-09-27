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
    Schema::create('catering', function (Blueprint $table) {
        $table->id('id_catering');
        $table->date('tanggal');
        $table->enum('waktu',['Pagi','Siang','Malam']);
        $table->string('menu');
        $table->timestamps();
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('catering');
    }
};
