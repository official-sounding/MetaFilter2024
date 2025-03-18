<?php

declare(strict_types=1);

namespace App\Jobs\Import;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

final class ProcessImportJob implements ShouldQueue
{
    use Dispatchable;
    use InteractsWithQueue;
    use Queueable;
    use SerializesModels;

    public int $timeout = 1200;

    // WIP: https://laraveldaily.com/post/laravel-import-very-large-csv-jobs-queues

    public function __construct(private readonly string $file)
    {
    }

    public function handle(): void
    {
        $fieldMap = [
            'name' => 0,
            'category' => 1,
            'description' => 2,
            'price' => 3,
            'stock' => 4,
        ];

        $fileStream = fopen($this->file, 'r');

        $skipHeader = true;
        while (($line = fgetcsv($fileStream)) !== false) {
            if ($skipHeader) {
                $skipHeader = false;

                continue;
            }

            dispatch(new ProcessProductImportJob($line, $fieldMap));
        }

        fclose($fileStream);

        unlink($this->file);
    }
}
