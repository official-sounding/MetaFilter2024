<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class () extends Migration {
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
            $table->string('route');
            $table->string('view');
            $table->boolean('has_theme')->default(false);

            $table->tinyInteger('footer_navigation_sort_order')->default(0);
            $table->tinyInteger('global_navigation_sort_order')->default(0);

            $table->boolean('in_dropdown')->default(false);
            $table->boolean('in_footer_nav')->default(false);

            $table->nullableTimestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('subsites');
    }
};
