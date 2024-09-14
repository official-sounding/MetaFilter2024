<?php

declare(strict_types=1);

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('versions', function (Blueprint $table) {
            $table->increments('version_id');
            $table->string('versionable_id');
            $table->string('versionable_type');
            $table->string('user_id')->nullable();
            $table->longText('model_data');
            $table->string('reason', 100)->nullable();
            $table->index('versionable_id');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::drop('versions');
    }
};
