<?php

declare(strict_types=1);

namespace App\Services\Imports;

use App\Dtos\ImportDto;
use App\Models\User;
use App\Traits\ImportTrait;

final class UserImportService
{
    use ImportTrait;

    public const array COLUMNS = [
        'first_name',
        'last_name',
        'email',
        'phone',
        'street_address',
        'city',
        'state',
        'postal_code',
        'country',
        'date_of_birth',
    ];

    public function import(): void
    {
        $dto = new ImportDto(
            model: new User(),
            filePath: 'app/test,csv',
            columns: self::COLUMNS,
            columnLabel: 'date_of_birth',
            columnValue: "STR_TO_DATE(@date_of_birth, '%c/%d/%Y')",
        );

        $this->importData($dto);
    }
}
