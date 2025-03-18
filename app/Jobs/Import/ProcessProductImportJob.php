<?php

declare(strict_types=1);

namespace App\Jobs\Import;

use App\Traits\LoggingTrait;
use Exception;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

final class ProcessProductImportJob implements ShouldQueue
{
    use Dispatchable;
    use InteractsWithQueue;
    use LoggingTrait;
    use Queueable;
    use SerializesModels;

    // WIP: https://laraveldaily.com/post/laravel-import-very-large-csv-jobs-queues

    public function __construct(private readonly array $dataLine, private readonly array $fieldMap)
    {
    }
    public function handle(): void
    {
        $category = ProductCategory::firstOrCreate(
            [
                'name' => $this->dataLine[$this->fieldMap['category']],
            ],
            [
                'name' => $this->dataLine[$this->fieldMap['category']],
            ]
        );

        try {
            Product::updateOrCreate(
                [
                    'name' => $this->dataLine[$this->fieldMap['name']],
                    'category_id' => $category->id,
                ],
                [
                    'name' => $this->dataLine[$this->fieldMap['name']],
                    'category_id' => $category->id,
                    'description' => $this->dataLine[$this->fieldMap['description']],
                    'price' => $this->dataLine[$this->fieldMap['price']],
                    'stock_left' => $this->dataLine[$this->fieldMap['stock']],
                ]
            );
        } catch (Exception $exception) {
            $this->logError($exception);
            $this->logInfo(json_encode($this->dataLine));
        }
    }
}
