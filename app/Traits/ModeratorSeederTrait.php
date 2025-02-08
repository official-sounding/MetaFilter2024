<?php

declare(strict_types=1);

namespace App\Traits;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\File;

trait ModeratorSeederTrait
{
    use LoggingTrait;
    use WithoutModelEvents;

    public function getModeratorsFromJson(): mixed
    {
        $path = storage_path('app/imports/metafilter-moderators.json');

        if (file_exists($path)) {
            $json = File::get($path);

            return json_decode($json, true);
        } else {
            $this->logDebugMessage('Moderators JSON file does not exist at: ' . $path);

            return null;
        }
    }
}
