<?php

declare(strict_types=1);

namespace App\Presenters;

use App\Models\Post;
use App\Traits\PostTrait;
use Coderflex\LaravelPresenter\Presenter;
use Illuminate\Database\Eloquent\Model;
use InvalidArgumentException;

final class PostPresenter extends Presenter
{
    use PostTrait;

    public function getCanonicalUrl(Model $post): string
    {
        if (!($post instanceof Post)) {
            throw new InvalidArgumentException('Expected Post model');
        }

        return route('posts.show', $post);
    }

    public function url(): string
    {
        return $this->getCanonicalUrl($this->model);
    }
}
