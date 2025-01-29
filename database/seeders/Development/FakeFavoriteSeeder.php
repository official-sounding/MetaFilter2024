<?php

declare(strict_types=1);

namespace Database\Seeders\Development;

use Illuminate\Database\Seeder;

final class FakeFavoriteSeeder extends Seeder
{
    public function run(): void
    {
        $this->seedCommentFavorites();
        $this->seedPostFavorites();
    }

    private function seedCommentFavorites(): void
    {
        //
    }

    private function seedPostFavorites(): void
    {
        //
    }
}
