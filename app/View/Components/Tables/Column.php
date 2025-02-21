<?php

declare(strict_types=1);

namespace App\View\Components\Tables;

final class Column
{
    public string $component = 'tables.column';
    public bool $isHeader = false;
    public string $key;
    public string $label;

    public function __construct(string $key, string $label, bool $isHeader = false)
    {
        $this->key = $key;
        $this->label = $label;
        $this->isHeader = $isHeader;
    }

    public static function make(string $key, string $label, bool $isHeader = false): Column
    {
        return new Column($key, $label, $isHeader);
    }
}
