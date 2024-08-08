<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::dropIfExists('patterns');

        Schema::create('patterns', function (Blueprint $table) {
            $table->id();
            $table->json('pattern');
            $table->timestamps();
        });

        DB::table('patterns')->insert(
            [
                'pattern' => json_encode([8, 4, 2, 1, 1]),
            ],
            [
                'pattern' => json_encode([4, 4, 4, 2, 2]),
            ],
            [
                'pattern' => json_encode([8, 4, 4, 4, 4]),
            ],
            [
                'pattern' => json_encode([8, 4, 1, 1, 1, 1]),
            ],
            [
                'pattern' => json_encode([4, 4, 2, 2, 2, 2]),
            ],
            [
                'pattern' => json_encode([8, 2, 2, 2, 1, 1]),
            ],
            [
                'pattern' => json_encode([4, 4, 4, 2, 1, 1]),
            ],
            [
                'pattern' => json_encode([4, 2, 2, 2, 2, 2, 2]),
            ],
            [
                'pattern' => json_encode([4, 4, 2, 2, 2, 1, 1]),
            ],
            [
                'pattern' => json_encode([8, 2, 2, 1, 1, 1, 1]),
            ],
            [
                'pattern' => json_encode([4, 4, 4, 1, 1, 1, 1]),
            ],
            [
                'pattern' => json_encode([4, 2, 2, 2, 2, 2, 1, 1]),
            ],
            [
                'pattern' => json_encode([8, 1, 1, 1, 1, 1, 1, 1, 1]),
            ],
            [
                'pattern' => json_encode([4, 2, 2, 2, 2, 1, 1, 1, 1]),
            ],
            [
                'pattern' => json_encode([4, 4, 2, 1, 1, 1, 1, 1, 1]),
            ],
            [
                'pattern' => json_encode([2, 2, 2, 2, 2, 2, 1, 1, 1, 1]),
            ],
            [
                'pattern' => json_encode([4, 4, 1, 1, 1, 1, 1, 1, 1, 1]),
            ],
            [
                'pattern' => json_encode([4, 2, 2, 2, 1, 1, 1, 1, 1, 1]),
            ],
            [
                'pattern' => json_encode([8, 8]),
            ],
            [
                'pattern' => json_encode([8, 4, 4]),
            ],
            [
                'pattern' => json_encode([8, 4, 2, 2]),
            ],
            [
                'pattern' => json_encode([4, 2, 2, 1, 1, 1, 1, 1, 1, 1, 1]),
            ],
            [
                'pattern' => json_encode([2, 2, 2, 2, 2, 1, 1, 1, 1, 1, 1]),
            ],
            [
                'pattern' => json_encode([2, 2, 2, 2, 1, 1, 1, 1, 1, 1, 1, 1]),
            ],
            [
                'pattern' => json_encode([4, 2, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1]),
            ],
            [
                'pattern' => json_encode([2, 2, 2, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1]),
            ],
            [
                'pattern' => json_encode([4, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1]),
            ],
            [
                'pattern' => json_encode([2, 2, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1]),
            ],
            [
                'pattern' => json_encode([2, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1]),
            ],
            [
                'pattern' => json_encode([1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1]),
            ],
        );
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('patterns');
    }
};
