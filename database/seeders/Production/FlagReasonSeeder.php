<?php

declare(strict_types=1);

namespace Database\Seeders\Production;

use App\Models\FlagReason;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

final class FlagReasonSeeder extends Seeder
{
    use WithoutModelEvents;
    public function run(): void
    {
        $reasons = config('metafilter.seeders.flag_reasons');

        FlagReason::upsert($reasons, 'reason');
    }
}
