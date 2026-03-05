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
        Schema::create('price_contents', function (Blueprint $table) {
            $table->id();
            $table->string('section_key')->unique(); // pool_admission, sauna_admission, etc.
            $table->json('content'); // { "fr": "...", "en": "...", "id": "..." }
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('price_contents');
    }
};
