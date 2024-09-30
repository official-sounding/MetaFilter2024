<?php

declare(strict_types=1);

namespace Database\Seeders\Development;

use App\Models\User;
use App\Services\CsvService;
use Illuminate\Database\Seeder;

final class AdminSeeder extends Seeder
{
    public function __construct(
        protected CsvService $csvService,
    ) {}

    public function run(): void
    {
        $path = storage_path('app/imports/metafilter-admins.csv');

        $data = [];
        $admins = $this->csvService->read($path);

        foreach ($admins as $admin) {
            $data[] = [
                'id' => $admin['id'],
                'name' => $admin['name'],
                'username' => $admin['username'],
                'email' => $admin['email'],
            ];
        }

        User::upsert($data, 'id');
    }
}
