<?php

declare(strict_types=1);

namespace App\Presenters;

use App\Traits\UserTrait;
use Coderflex\LaravelPresenter\Presenter;

final class UserPresenter extends Presenter
{
    use UserTrait;

    public function profile(): string
    {
        return $this->getProfileUrl($this->model);
    }
}
