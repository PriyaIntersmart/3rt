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
        Schema::create('home_cms', function (Blueprint $table) {
            $table->id();
            $table->string('section_one_image');
            $table->string('section_one_title');
            $table->string('section_one_subtitle')->nullable();
            $table->longText('section_one_description')->nullable();
            $table->string('section_one_button_title')->nullable();
            $table->string('section_two_imageone');
            $table->string('section_two_imagetwo');
            $table->string('section_two_imagethree');
            $table->string('section_two_title');
            $table->longText('section_two_description')->nullable();
            $table->string('section_two_button_title')->nullable();
            $table->string('section_three_title');
            $table->string('section_three_image')->nullable();
            $table->longText('section_three_description')->nullable();
            $table->string('section_four_title');
            $table->longText('section_four_description')->nullable();
            $table->string('section_four_button_title')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('home_cms');
    }
};
