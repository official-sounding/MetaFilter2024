<?php

declare(strict_types=1);

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration {
    public function up(): void
    {
        Schema::create(config('survey.database.tables.sections'), function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('survey_id')->nullable();
            $table->string('name');
            $table->timestamps();
        });
    }
};
