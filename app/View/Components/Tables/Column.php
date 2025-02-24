<?php

declare(strict_types=1);

namespace App\View\Components\Tables;

final class Column
{
    public string $component = 'tables.column';
    public bool $isRowHeader = false;
    public string $key;
    public string $label;

    public function __construct(string $key, string $label, bool $isRowHeader = false)
    {
        $this->key = $key;
        $this->label = $label;
        $this->isRowHeader = $isRowHeader;
    }

    public static function make(string $key, string $label, bool $isRowHeader = false): Column
    {
        return new Column($key, $label, $isRowHeader);
    }
}
