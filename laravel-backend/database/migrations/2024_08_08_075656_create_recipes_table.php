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
        Schema::create('recipes', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->unsignedBigInteger('pattern_id');
            $table->timestamps();

            // 外部キー制約
            $table->foreign('pattern_id')->references('id')->on('patterns')->onDelete('cascade');
        });

        // 中間テーブル
        Schema::create('recipe_spice', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('recipe_id');
            $table->unsignedBigInteger('spice_id');
            $table->timestamps();

            // 外部キー制約
            $table->foreign('recipe_id')->references('id')->on('recipes')->onDelete('cascade');
            $table->foreign('spice_id')->references('id')->on('spices')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('recipe_spice');
        Schema::dropIfExists('recipes');
    }
};
