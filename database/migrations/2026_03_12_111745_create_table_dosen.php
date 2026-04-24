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
        Schema::create('table_dosen', function (Blueprint $table) {
            $table->id();
            $table->string('Full Name');
            $table->string('NIP')->unique();
            $table->string('NIDN')->unique();
            $table->string('Pendidikan_Terakhir');
            $table->string('Jurusan_Id');
            $table->string('Tempat_Lahir');
            $table->date('Tanggal_Lahir');
            $table->text('Alamat');
             $table->text('Lokasi_Kampus');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_dosen');
    }
};



