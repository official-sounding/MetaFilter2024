<?php

declare(strict_types=1);

/*
 * This file is part of Laravel Love.
 *
 * (c) Anton Komarev <anton@komarev.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

use Cog\Laravel\Love\ReactionType\Models\ReactionType;
use Cog\Laravel\Love\Support\Database\Migration;
use Illuminate\Database\Schema\Blueprint;

return new class extends Migration
{
    public function up(): void
    {
        $this->schema->create((new ReactionType())->getTable(), function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->tinyInteger('mass');
            $table->timestamps();

            $table->index('name');
        });
    }
};
