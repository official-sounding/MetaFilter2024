<?php

declare(strict_types=1);

namespace Database\Seeders\Development;

use App\Imports\AdminUsersImport;
use Illuminate\Database\Seeder;
use Maatwebsite\Excel\Excel;

final class AdminSeeder extends Seeder
{
    public function __construct(
        protected Excel $excel,
    ) {}

    public function run(): void
    {
        $file = storage_path('app/imports/metafilter-admins.csv');

        $this->excel->import(new AdminUsersImport(), $file);
    }
}
