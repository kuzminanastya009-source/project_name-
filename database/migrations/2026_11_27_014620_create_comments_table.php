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
        Schema::create('comments', function (Blueprint $table) {
        $table->id();
        // Внешний ключ на таблицу статей (при удалении статьи комментарии тоже удалятся)
        $table->foreignId('article_id')->constrained()->onDelete('cascade');
        $table->string('author'); // имя автора
        $table->text('content');  // текст комментария
        $table->timestamps();
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comments');
    }
};
