<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('banner_links', function (Blueprint $table) {
            $table->id();

            $table->string('title');
            $table->text('url');
            $table->integer('sort_order');

            $table->nullableTimestamps();
            $table->softDeletes();
        });
    }
};
