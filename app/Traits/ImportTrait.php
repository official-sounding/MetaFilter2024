<?php

declare(strict_types=1);

namespace App\Traits;

use App\Dtos\ImportDto;

trait ImportTrait
{
    public function importData(ImportDto $dto): void
    {
        LoadData::from(storage_path($dto->filePath))
            ->to($dto->model)
            ->fieldsTerminatedBy(',')
            ->fieldsEnclosedBy('"', true)
            ->useFileHeaderForColumns()
            ->onlyLoadColumns($dto->columns)
            ->setColumn($dto->columnLabel, $dto->columnValue)
            ->load();
        }
    }
}
