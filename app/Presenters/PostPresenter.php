<?php

declare(strict_types=1);

namespace App\Presenters;

use App\Traits\PostTrait;
use Coderflex\LaravelPresenter\Presenter;

final class PostPresenter extends Presenter
{
    use PostTrait;

    public function url(): string
    {
        return $this->getCanonicalUrl($this->model);
    }
}
