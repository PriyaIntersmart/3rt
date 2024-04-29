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
        Schema::create('about_us', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('subtitle');
            $table->longText('description')->nullable();
            $table->string('about_image')->nullable();
            $table->string('about_image_one')->nullable();
            $table->string('about_image_two')->nullable();
            $table->longText('work_overview_title');
            $table->longText('work_overview_description')->nullable();
            $table->string('work_overview_imageone')->nullable();
            $table->string('work_overview_imagetwo')->nullable();
            $table->string('work_overview_imagethree')->nullable();
            $table->string('work_overview_imagefour')->nullable();
            $table->longText('about_right_description')->nullable();
            $table->longText('about_left_description')->nullable();
            $table->string('section_one_heading')->nullable();
            $table->string('section_one_subheading')->nullable();
            $table->string('section_two_heading')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('about_us');
    }
};
