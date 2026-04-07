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
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique(); // Untuk URL ramah SEO
            $table->string('image')->nullable(); // Path foto
            $table->string('category_label'); // Misal: Desain Interior Premium
            $table->text('short_description'); // Deskripsi singkat di overlay foto
            $table->text('long_description'); // Narasi persuasif
            $table->json('features'); // List keunggulan (disimpan sebagai array)
            $table->string('testimonial_text')->nullable();
            $table->string('testimonial_author')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('services');
    }
};
