<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('faqs', function (Blueprint $table) {
            $table->id();

            $table->string('question')->unique();
            $table->string('slug');
            $table->longText('answer');
            $table->integer('legacy_id')->nullable();

            $table->foreignId('subsite_id')
                ->constrained('subsites')
                ->cascadeOnUpdate()
                ->cascadeOnDelete();

            $table->nullableTimestamps();
            $table->softDeletes();
        });
    }
};
