<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->id();

            $table->text('text');

            $table->foreignId('parent_id')
                ->nullable()
                ->constrained('comments');

            $table->foreignId('reply_id')
                ->nullable()
                ->constrained('comments')
                ->cascadeOnDelete();

            $table->nullableMorphs('commentable');
            $table->nullableMorphs('commenter');

            $table->boolean('approved')->default(true)->index();

            $table->nullableTimestamps();
            $table->softDeletes();
        });
    }
};
