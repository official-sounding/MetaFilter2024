<?php

declare(strict_types=1);

namespace App\Console\Commands;

use Database\Seeders\Development\ModeratorSeeder;
use Illuminate\Console\Command;

final class RunModeratorSeeder extends Command
{
    protected $signature = 'mefi:run-moderator-seeder';
    protected $description = 'Seed database with moderator users';

    public function handle(): void
    {
        $seeder = new ModeratorSeeder();

        $seeder->run();
    }
}
