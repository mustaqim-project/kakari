<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePengurusesTable extends Migration
{
    public function up(): void
    {
        Schema::create('penguruses', function (Blueprint $table) {
            $table->id();
            $table->string('image')->nullable(); // untuk menyimpan gambar pengurus
            $table->string('name');
            $table->string('jabatan');
            $table->text('deskripsi')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('penguruses');
    }
}
