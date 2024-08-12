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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id')->constrained(
                table: 'categories',
                indexName: 'posts_category_id'
            );
            $table->foreignId('user_id')->constrained(
                table: 'users',
                indexName: 'posts_user_id'
            );
            $table->string('title');
            $table->string('slug')->unique();
            $table->string('description');
            $table->longText('body');
            $table->string('company');
            $table->foreignId('city_id')->constrained(
                table: 'cities',
                indexName: 'posts_city_id'
            );
            $table->string('image');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
