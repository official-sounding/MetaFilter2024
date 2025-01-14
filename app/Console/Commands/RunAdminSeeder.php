<?php

declare(strict_types=1);

namespace App\Console\Commands;

use Database\Seeders\Development\AdminSeeder;
use Illuminate\Console\Command;

final class RunAdminSeeder extends Command
{
    protected $signature = 'mefi:run-admin-seeder';
    protected $description = 'Seed database with admin users';

    public function handle(): void
    {
        $seeder = new AdminSeeder();

        $seeder->run();
    }
}
