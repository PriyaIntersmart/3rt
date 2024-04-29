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
        Schema::create('structure_cms', function (Blueprint $table) {
            $table->id();
            $table->string('left_section_title');
            $table->string('left_section_image')->nullable();
            $table->longText('left_section_content')->nullable();
            $table->string('right_section_title');
            $table->longText('right_section_content')->nullable();
            $table->string('section_one_image')->nullable();
            $table->string('section_one_heading');
            $table->string('section_one_subtitle_one')->nullable();
            $table->string('section_one_subtitle_two')->nullable();
            $table->string('section_two_heading');
            $table->string('section_two_image')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('structure_cms');
    }
};
