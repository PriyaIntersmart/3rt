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
        Schema::create('banner_and_meta_tags', function (Blueprint $table) {
            $table->id();
            $table->string('page');
            $table->string('page_title');
            $table->string('banner_image')->nullable();
            $table->string('banner_title')->nullable();
            $table->string('meta_title')->nullable();
            $table->string('meta_keywords')->nullable();
            $table->string('meta_description')->nullable();
            $table->string('other_meta_keywords')->nullable();
            $table->boolean('status')->default(1)->comment('1:active,0:inactive');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('banner_and_meta_tags');
    }
};
