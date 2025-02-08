<?php

declare(strict_types=1);

namespace App\Traits;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

trait StringFormattingTrait
{
    public function getFirstLetter(string $string): string
    {
        return mb_strimwidth($string, 0, 1);
    }

    public function lowercase(string $string): string
    {
        return mb_strtolower($string);
    }

    public function uppercase(string $string): string
    {
        return mb_strtoupper($string);
    }

    public function getSlug(string $string): string
    {
        return Str::slug($string);
    }

    public function hashString(string $string): string
    {
        return Hash::make($string);
    }

    public function removePunctuation(string $string): string
    {
        return preg_replace('/[[:punct:]]/', '', $string);
    }

    public function swapPunctuation(string $string): string
    {

    }
}
