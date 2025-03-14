<?php

declare(strict_types=1);

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class () extends Migration {
    public function up(): void
    {
        Schema::create(config('survey.database.tables.answers'), function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('question_id');
            $table->unsignedInteger('entry_id')->nullable();
            $table->string('value');
            $table->timestamps();
        });

        Schema::create(config('survey.database.tables.entries'), function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('survey_id');
            $table->unsignedInteger('participant_id')->nullable();
            $table->timestamps();
        });

        Schema::create(config('survey.database.tables.questions'), function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('survey_id')->nullable();
            $table->unsignedInteger('section_id')->nullable();
            $table->string('content');
            $table->string('type')->default('text');
            $table->json('options')->nullable();
            $table->json('rules')->nullable();
            $table->timestamps();
        });

        Schema::create(config('survey.database.tables.sections'), function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('survey_id')->nullable();
            $table->string('name');
            $table->timestamps();
        });

        Schema::create(config('survey.database.tables.surveys'), function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->json('settings')->nullable();
            $table->timestamps();
        });
    }
};
