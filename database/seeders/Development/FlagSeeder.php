<?php

declare(strict_types=1);

namespace Database\Seeders\Development;

use Illuminate\Database\Seeder;

final class FlagSeeder extends Seeder
{
    public function run(): void
    {
        $this->seedCommentFlags();
        $this->seedPostFlags();
    }

    private function seedCommentFlags(): void
    {
        //
    }

    private function seedPostFlags(): void
    {
        //
    }
}
