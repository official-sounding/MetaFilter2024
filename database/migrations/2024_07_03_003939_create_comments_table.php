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

            $table->longText('text');

            $table->foreignId('parent_id')
                ->nullable()
                ->constrained('comments');

            $table->foreignId('post_id')
                ->nullable()
                ->constrained('posts');

            $table->foreignId('user_id')
                ->nullable()
                ->constrained('users')
                ->cascadeOnDelete();

            $table->nullableTimestamps();
            $table->softDeletes();
        });
    }
};
