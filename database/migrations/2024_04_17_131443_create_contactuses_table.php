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
        Schema::create('contactuses', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->longText('iframe');
            $table->string('address')->nullable();
            $table->string('email');
            $table->integer('sort_order')->default(0);
            $table->boolean('status')->default(1)->comment('1:active,0:inactive');
            $table->boolean('display_footer')->default(1)->comment('1:yes,0:no');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contactuses');
    }
};
