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
        Schema::create('kajian_sessions', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description')->nullable();
            $table->date('schedule_date');
            $table->time('schedule_time');
            $table->foreignId('speaker_id')->nullable()->constrained()->onDelete('set null');
            $table->string('location')->nullable();
            $table->boolean('is_live')->default(false);
            $table->string('youtube_url')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kajian_sessions');
    }
};
