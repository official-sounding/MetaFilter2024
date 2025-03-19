<?php

declare(strict_types=1);

namespace App\Services;

use App\Models\User;

final class ImportService
{
    // Placeholder functions to prepare for import
    // https://medium.com/@laravelprotips/optimizing-laravels-update-or-create-for-csv-imports-a6d05201e247

    private function upsert(): void
    {
        $accountsData = [
            ['number' => '610768', 'balance' => '630'],
            ['number' => '773179', 'balance' => '403'],
            ['number' => '346113', 'balance' => '512'],
        ];

        User::upsert($accountsData, ['number'], ['balance']);
    }

    private function useCollection(): void
    {
        $accountsListFromCSV = [];
        $accountsInDB = User::pluck('balance', 'number');
        // This gives us a key-value array: [number => balance]

        foreach ($accountsListFromCSV as $entry) {
            if (isset($accountsInDB[$entry[0]])) {
                if ($accountsInDB[$entry[0]] !== $entry[1]) {
                    User::where('number', $entry[0])->update(['balance' => $entry[1]]);
                }
            } else {
                User::create([
                    'number' => $entry[0],
                    'balance' => $entry[1],
                ]);
            }
        }
    }

    private function batchInsert(): void
    {
        $csvAccounts = [];
        $existingAccounts = User::pluck('balance', 'number');
        $batchInsert = [];

        foreach ($csvAccounts as $data) {
            if (!isset($existingAccounts[$data[0]])) {
                $batchInsert[] = [
                    'number' => $data[0],
                    'balance' => $data[1],
                ];
            }
        }

        if (!empty($batchInsert)) {
            User::insert($batchInsert);
        }

        if (!empty($newAccounts)) {
            foreach (array_chunk($newAccounts, 1000) as $smallBatch) {
                User::insert($smallBatch);
            }
        }
    }
}
