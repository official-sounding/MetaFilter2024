<?php

declare(strict_types=1);

namespace Database\Seeders\Production;

use App\Models\FlagReason;
use Illuminate\Database\Seeder;

final class FlagReasonSeeder extends Seeder
{
    public function run(): void
    {
        $reasons = [
            [
                'reason' => 'Fantastic comment',
                'slug' => 'fantastic-comment',
            ],
            [
                'reason' => 'HTML/display error',
                'slug' => 'html-display-error',
            ],
            [
                'reason' => 'Offensive/sexism/racism',
                'slug' => 'offensive-sexism-racism',
            ],
            [
                'reason' => 'Breaks the guidelines',
                'slug' => 'breaks-the-guidelines',
            ],
            [
                'reason' => 'Noise/derail/other',
                'slug' => 'noise-derail-other',
            ],
            [
                'reason' => 'Flag with note',
                'slug' => 'flag-with-note',
            ],
        ];

        FlagReason::upsert($reasons, 'reason');
    }
}
