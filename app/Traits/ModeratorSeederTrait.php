<?php

declare(strict_types=1);

namespace App\Traits;

use Illuminate\Contracts\Filesystem\FileNotFoundException;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\File;

trait ModeratorSeederTrait
{
    use LoggingTrait;
    use WithoutModelEvents;

    public function getModeratorsFromJson(): mixed
    {
        $path = storage_path('app/imports/metafilter-moderators.json');

        try {
            $json = File::get($path);

            return json_decode($json, true);
        } catch (FileNotFoundException $e) {
            $this->logDebugMessage('Moderators JSON file could not be read: ' . $e->getMessage());

            return null;
        }
    }
}
