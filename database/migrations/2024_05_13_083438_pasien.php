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
        Schema::create('pasien', function (Blueprint $table){
            $table->id();
            $table->String('nama_pasien');
            $table->String('ket');
            $table->unsignedBigInteger('id_user');
            $table->foreign('id_user')->references('id')->on('user');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExits('pasien');
        Schema::dropIfExits('sessions');
    }
};
