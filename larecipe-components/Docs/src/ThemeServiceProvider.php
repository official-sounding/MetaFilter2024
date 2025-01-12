<?php

declare(strict_types=1);

namespace Metafilter\Docs;

use BinaryTorch\LaRecipe\LaRecipe;
use Illuminate\Support\ServiceProvider;

final class ThemeServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        LaRecipe::style('docs', __DIR__ . '/../resources/css/theme.css');
    }

    public function register(): void
    {
        //
    }
}
