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
        Schema::create('section_contents', function (Blueprint $table) {
            $table->id();
            // Identifikasi section (hero, services, sauna, pool, footer, dll)
            $table->string('section_key'); // contoh: 'hero_home', 'feature_sauna'
            
            // Tipe konten: 'text', 'image', 'mixed'
            $table->string('content_type')->default('mixed');
            
            // Field translatable (JSON): {"id": "...", "fr": "..."}
            $table->json('title')->nullable();
            $table->json('subtitle')->nullable();
            $table->json('description')->nullable();
            $table->json('button_text')->nullable();
            $table->json('button_link')->nullable();
            
            // Field non-translatable (sama untuk semua bahasa)
            $table->string('image')->nullable();
            $table->string('icon')->nullable();
            $table->string('css_class')->nullable(); // Untuk custom styling per section
            
            // Pengaturan tampilan
            $table->boolean('is_visible')->default(true);
            $table->integer('sort_order')->default(0);
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('section_contents');
    }
};
