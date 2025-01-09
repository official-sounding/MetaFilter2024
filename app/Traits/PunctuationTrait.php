<?php

declare(strict_types=1);

namespace App\Traits;

trait PunctuationTrait
{
    public function removePunctuation(string $string): string
    {
        return preg_replace('/[[:punct:]]/', '', $string);
    }
}
