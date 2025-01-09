<?php

declare(strict_types=1);

namespace App\Traits;

trait SearchTrait
{
    private function buildWildCards(string $term): string
    {
        if ($term === '') {
            return $term;
        }

        // Strip MySQL reserved symbols
        $reservedSymbols = ['-', '+', '<', '>', '@', '(', ')', '~'];

        $term = str_replace($reservedSymbols, '', $term);

        $words = explode(' ', $term);

        foreach ($words as $index => $word) {
            // Add operators so we can leverage the boolean mode of fulltext indices
            $words[$index] = '+' . $word . '*';
        }

        return implode(' ', $words);
    }

    protected function scopeSearch($query, string $term): mixed
    {
        $columns = implode(',', $this->searchable);

        // Boolean mode allows us to match john* for words starting with john
        // (https://dev.mysql.com/doc/refman/5.6/en/fulltext-boolean.html)
        $query->whereRaw(
            "MATCH ($columns) AGAINST (? IN BOOLEAN MODE)",
            $this->buildWildCards($term),
        );

        return $query;
    }
}

// https://www.twilio.com/en-us/blog/build-live-search-box-laravel-livewire-mysql
