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
        Schema::create('spices', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->boolean('is_whole')->default(false);
            $table->timestamps();
        });

        DB::table('spices')->insert(
            [
                'name' => 'クミンシード',
                'is_whole' => true
            ],
            [
                'name' => 'クローブ',
                'is_whole' => true
            ],
            [
                'name' => 'グリーンカルダモン',
                'is_whole' => true
            ],
            [
                'name' => 'シナモン',
                'is_whole' => true
            ],
            [
                'name' => 'フェンネルシード',
                'is_whole' => true
            ],
            [
                'name' => 'マスタードシード',
                'is_whole' => true
            ],
            [
                'name' => 'フェヌグリークシード',
                'is_whole' => true
            ],
            [
                'name' => 'レッドチリ',
                'is_whole' => true
            ],
            [
                'name' => 'ビッグカルダモン',
                'is_whole' => true
            ],
            [
                'name' => 'ブラックペッパー',
                'is_whole' => true
            ],
            [
                'name' => 'セロリシード',
                'is_whole' => true
            ],
            [
                'name' => 'メース',
                'is_whole' => true
            ],
            [
                'name' => 'ディルシード',
                'is_whole' => true
            ],
            [
                'name' => 'カロンジ',
                'is_whole' => true
            ],
            [
                'name' => 'ウラッドダル',
                'is_whole' => true
            ],
            [
                'name' => 'スターアニス',
                'is_whole' => true
            ],
            [
                'name' => 'コリアンダーシード',
                'is_whole' => true
            ],
            [
                'name' => 'その他シード',
                'is_whole' => true
            ],
            [
                'name' => 'コリアンダー',
                'is_whole' => false
            ],
            [
                'name' => 'ターメリック',
                'is_whole' => false
            ],
            [
                'name' => 'パプリカ',
                'is_whole' => false
            ],
            [
                'name' => 'レッドチリ',
                'is_whole' => false
            ],
            [
                'name' => 'フェヌグリーク',
                'is_whole' => false
            ],
            [
                'name' => 'クミン',
                'is_whole' => false
            ],
            [
                'name' => 'ガラムマサラ',
                'is_whole' => false
            ],
            [
                'name' => 'グリーンカルダモン',
                'is_whole' => false
            ],
            [
                'name' => 'アサフェティダ',
                'is_whole' => false
            ],
            [
                'name' => 'ホワイトペッパー',
                'is_whole' => false
            ],
            [
                'name' => 'カスリメティ',
                'is_whole' => false
            ],
            [
                'name' => 'フェンネル',
                'is_whole' => false
            ],
            [
                'name' => 'ブラックペッパー',
                'is_whole' => false
            ],
            [
                'name' => 'アムチュール',
                'is_whole' => false
            ],
            [
                'name' => 'チャットマサラ',
                'is_whole' => false
            ],
            [
                'name' => 'その他パウダー',
                'is_whole' => false
            ],
        );
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // spices テーブルの削除
        Schema::dropIfExists('spices');
    }
};
