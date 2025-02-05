<?php

declare(strict_types=1);

namespace App\Traits;

trait FilterTrait
{
    public function hasUnacceptableWords(string $text): bool
    {
        $unacceptableWords = config('config.unacceptable_words');

        return stripos(json_encode($unacceptableWords), $text);
    }
}
