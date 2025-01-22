<?php

declare(strict_types=1);

namespace Database\Seeders\Development;

use App\Models\BannerLink;
use Illuminate\Database\Seeder;

final class FakeBannerLinkSeeder extends Seeder
{
    private const int NUMBER_OF_FAKE_LINKS = 3;

    public function run(): void
    {
        BannerLink::factory(self::NUMBER_OF_FAKE_LINKS)->create();
    }
}
