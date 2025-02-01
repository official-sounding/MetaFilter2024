<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('flags', function (Blueprint $table) {
            $table->id();

            $table->foreignId('comment_id')
                ->constrained()
                ->onDelete('cascade');

            $table->foreignId('flag_reason_id')
                ->constrained()
                ->onDelete('cascade');

            $table->foreignId('user_id')
                ->constrained()
                ->onDelete('cascade');

            $table->text('note')->nullable();

            $table->nullableTimestamps();
        });
    }
};
