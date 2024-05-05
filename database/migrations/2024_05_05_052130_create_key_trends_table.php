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
        Schema::create('key_trends', function (Blueprint $table) {
            $table->id();
            $table->string('starting_year');
            $table->string('starting_value');
            $table->string('ending_year');
            $table->string('ending_value');
            $table->string('title');
            $table->string('percentage');
            $table->string('heading');
            $table->longText('description');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('key_trends');
    }
};
