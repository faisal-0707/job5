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
        Schema::create('murids', function (Blueprint $table) {
            $table->id();
            $table->string('NIS', 7)->unique;
            $table->string('nama_siswa');
            $table->enum('jenis_kelamin',['P','L']);
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->foreignId('kelas_id')->constrained();
            $table->foreignId('wali-murid_id')->constrained();          
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('murids');
    }
};
