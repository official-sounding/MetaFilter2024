<?php

declare(strict_types=1);

namespace App\Traits;

use Illuminate\Support\Str;

trait StringFormattingTrait
{
    public function capitalizeFirstLetter(string $string): string
    {
        return mb_strtoupper(mb_substr($string, 0, 1)).$this->lowercase(mb_substr($string, 1));
    }

    public function getLettersOnly(string $string): array|string|null
    {
        return preg_replace(pattern: '/[^a-zA-Z]+/', replacement: '', subject: $string);
    }

    public function getNumbersOnly(string $string): int
    {
        $replacements = [
            '-',
            '+',
        ];

        foreach ($replacements as $replacement) {
            $string = str_replace($replacement, '', $string);
        }

        return (int) filter_var($string, FILTER_SANITIZE_NUMBER_INT);
    }

    public function getFirstCharacters(string $string, int $numberOfCharacters): string
    {
        return substr($string, 0, $numberOfCharacters);
    }

    public function getSlugFromString(string $string): string
    {
        return Str::slug($string);
    }

    public function changeFilenameToName(string $filename, string $extension): string
    {
        $name = str_replace('.'.$extension, '', $filename);

        return Str::headline($name);
    }

    public function lowercase(string $string): string
    {
        return mb_strtolower($string);
    }

    public function sanitizeString(string $string): array|string|null
    {
        return preg_replace(pattern: '/[^a-z\d]+/', replacement: '-', subject: $string);
    }

    public function isAllCaps(string $string): bool
    {
        return ctype_upper(preg_replace(pattern: '/\W+/', replacement: '', subject: $string));
    }

    public function replaceSingleQuotes(string $string): string
    {
        return str_replace("'", '&rsquo;', $string);
    }

    public function standardizeCapitalization(string $string): string
    {
        if ($this->isAllCaps($string) === true) {
            $string = $this->changeToTitleCase($string);
        }

        return $string;
    }

    public function titleCase(string $string): string
    {
        $smallWords = [
            'of', 'a', 'the', 'and', 'an', 'or', 'nor', 'but', 'is', 'if', 'then', 'else', 'when',
            'at', 'from', 'by', 'on', 'off', 'for', 'in', 'out', 'over', 'to', 'into', 'with',
        ];

        $words = explode(' ', $string);

        foreach ($words as $key => $word) {
            if (! $key or ! in_array($word, $smallWords)) {
                $words[$key] = ucfirst($word);
            }
        }

        return implode(' ', $words);

        // https://www.sitepoint.com/title-case-in-php/
    }

    public function changeNameToTitleCase(string $string): string
    {
        $name = '';
        $words = explode(' ', $string);

        foreach ($words as $word) {
            $word = $this->changeToTitleCase($word);

            $name .= $word.' ';
        }

        return trim($name);
    }

    public function changeToTitleCase(string $string): string
    {
        $wordSplitters = [
            ' ',
            '-',
            "D'",
            "O'",
            "L'",
            'Mc',
            'St.',
        ];

        $lowercaseExceptions = [
            'and',
            "d'",
            'da',
            'de',
            'den',
            'der',
            "l'",
            'of',
            'the',
            'und',
            'van',
            'von',
        ];

        $uppercaseExceptions = [
            'I',
            'II',
            'III',
            'IV',
            'VI',
            'VII',
            'VIII',
            'IX',
        ];

        $string = mb_strtolower($string);

        foreach ($wordSplitters as $delimiter) {
            $words = explode($delimiter, $string);

            $newWords = [];

            foreach ($words as $word) {
                if (in_array(mb_strtoupper($word), $uppercaseExceptions)) {
                    $word = mb_strtoupper($word);
                } elseif (! in_array($word, $lowercaseExceptions)) {
                    $word = ucfirst($word);
                }

                $newWords[] = $word;
            }

            if (in_array(mb_strtolower($delimiter), $lowercaseExceptions)) {
                $delimiter = mb_strtolower($delimiter);
            }

            $string = implode($delimiter, $newWords);
        }

        return $string;
    }
}
