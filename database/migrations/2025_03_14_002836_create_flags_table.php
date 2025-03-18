<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class () extends Migration {
    public function up(): void
    {
        Schema::create('markable_flags', function (Blueprint $table) {
            $table->id();

            $table->foreignId(column: 'user_id')
                ->constrained()
                ->cascadeOnUpdate()
                ->cascadeOnDelete();

            $table->morphs('markable');
            $table->string('value')->nullable();
            $table->json('metadata')->nullable();

            $table->nullableTimestamps();
        });
    }
};
