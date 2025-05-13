<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('pendidikans', function (Blueprint $table) {
            $table->id();
            $table->string('judul');
            $table->enum('tipe_program', ['formal', 'nonformal', 'online'])->nullable();
            $table->text('deskripsi')->nullable();
            $table->text('konten')->nullable();
            $table->string('gambar')->nullable();
            $table->string('lokasi')->nullable();
            $table->date('tanggal_mulai')->nullable();
            $table->date('tanggal_berakhir')->nullable();
            $table->enum('status_pendaftaran', ['dibuka', 'ditutup', 'beasiswa tersedia', 'kuota terbatas'])->nullable();
            $table->text('link_pendaftaran')->nullable();
            $table->string('akreditasi')->nullable(); // misal: null, A, B
            $table->string('badge')->nullable(); // misal: unggulan, baru
            $table->string('kuota')->nullable();
            $table->text('jadwal')->nullable();
            $table->boolean('is_active')->default(1);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('pendidikans');
    }
};
