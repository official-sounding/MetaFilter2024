<?php

declare(strict_types=1);

namespace App\Services;

use App\Traits\LoggingTrait;
use League\Csv\Reader;
use League\Csv\UnavailableStream;

final class CsvService
{
    use LoggingTrait;

    public function read(string $filePath): ?Reader
    {
        try {
            return Reader::createFromPath($filePath);
        } catch (UnavailableStream $exception) {
            $this->logError($exception);

            return null;
        }
    }
}
$csv = Reader::createFromPath(database_path() . '/csv/yourfile.csv', 'r');
