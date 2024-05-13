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
        Schema::create('antrian', function (Blueprint $table){
            $table->id();
            $table->String('no_antrian');
            $table->String('status_antrian');
            $table->unsignedBigInteger('id_pasien');
            $table->unsignedBigInteger('id_dokter');
            $table->foreign('id_pasien')->references('id')->on('pasien');
            $table->foreign('id_dokter')->references('id')->on('dokter');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExits('antrian');
        Schema::dropIfExits('sessions');
    }
};
