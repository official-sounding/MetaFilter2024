<?php

declare(strict_types=1);

namespace App\Imports;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

final class AdminUsersImport implements ToModel, WithHeadingRow
{
    public function model(array $row): Model|User|null
    {
        return new User([
            'id' => $row['id'],
            'legacy_id' => $row['id'],
            'name' => $row['name'],
            'username' => $row['username'],
            'email' => $row['email'],
            'is_admin' => true,
            'password' => Hash::make('password'),
        ]);
    }
}
