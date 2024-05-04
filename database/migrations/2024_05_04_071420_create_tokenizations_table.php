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
        Schema::create('tokenizations', function (Blueprint $table) {
            $table->id();
            $table->string('title_one');
            $table->string('title_two');
            $table->string('title_three');
            $table->string('title_four');
            $table->string('title_five');
            $table->string('title_six');
            $table->string('title_seven');
            $table->string('title_eight');
            $table->string('title_nine');
            $table->string('title_ten');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tokenizations');
    }
};
