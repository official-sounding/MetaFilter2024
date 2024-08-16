<?php

declare(strict_types=1);

namespace Database\Seeders\Production;

use Illuminate\Database\Seeder;

final class FlagReasonSeeder extends Seeder
{
    public function run(): void
    {
        $reasons = [
            'Fantastic comment',
            'HTML/display error',
            'Offensive/sexism/racism',
            'Breaks the guidelines',
            'Noise/derail/other',
        ];
    }
}
