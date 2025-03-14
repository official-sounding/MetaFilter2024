<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class () extends Migration {
    public function up(): void
    {
        Schema::create('contact_types', function (Blueprint $table) {
            $table->id();

            $table->string('type');
            $table->string('slug');

            $table->nullableTimestamps();
            $table->softDeletes();
        });
    }
};
