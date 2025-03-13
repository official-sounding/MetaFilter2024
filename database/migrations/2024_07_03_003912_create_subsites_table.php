<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('subsites', function (Blueprint $table) {
            $table->id();

            $table->string('name');
            $table->string('slug')->unique();
            $table->string('subdomain');
            $table->string('nickname')->nullable();
            $table->string('tagline')->nullable();
            $table->text('logo_filename')->nullable();
            $table->string('white_text')->nullable();
            $table->string('green_text')->nullable();
            $table->boolean('has_theme')->default(false);

            $table->nullableTimestamps();
            $table->softDeletes();
        });
    }
};
