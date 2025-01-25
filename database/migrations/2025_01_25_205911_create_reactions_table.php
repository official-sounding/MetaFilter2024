<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use LakM\Comments\Models\Comment;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('reactions', function (Blueprint $table) {
           $table->id();
           $table->morphs('owner');
           $table->foreignIdFor(Comment::class);

           $table->string('type');
           $table->timestamps();
        });
    }
};
