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
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->string('custom_id')->nullable()->index();
            $table->string('slug')->unique();
            $table->string('title');
            $table->string('category');
            $table->string('category_slug')->index();
            $table->string('reading_time')->default('5');
            $table->string('author')->default('Cenrion Engineering');
            $table->string('date')->nullable();
            $table->text('excerpt');
            $table->longText('content');
            $table->string('status')->default('published')->index();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blogs');
    }
};
