<?php

declare(strict_types=1);

namespace Metafilter\MetafilterDocs;

use BinaryTorch\LaRecipe\LaRecipe;
use Illuminate\Support\ServiceProvider;

final class ThemeServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        LaRecipe::style('metafilter-docs', __DIR__ . '/../resources/css/theme.css');
    }
}
