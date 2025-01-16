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

            $table->text('body');

            $table->foreignId('post_id')
                ->constrained('posts');

            $table->foreignId('user_id')
                ->nullable()
                ->constrained('users')
                ->nullOnDelete();

            $table->foreignId('parent_id')
                ->nullable()
                ->constrained('comments');

            $table->nullableTimestamps();
            $table->softDeletes();
        });
    }
};
