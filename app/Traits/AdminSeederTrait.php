<?php

declare(strict_types=1);

namespace App\Traits;

use Illuminate\Contracts\Filesystem\FileNotFoundException;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\File;

trait AdminSeederTrait
{
    use LoggingTrait;
    use WithoutModelEvents;

    public function getAdminsFromJson(): mixed
    {
        $path = storage_path('app/imports/metafilter-admins.json');

        try {
            $json = File::get($path);

            return json_decode($json, true);
        } catch (FileNotFoundException $e) {
            $this->logDebugMessage('Admins JSON file could not be read: ' . $e->getMessage());

            return null;
        }
    }
}
