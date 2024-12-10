<?php

declare(strict_types=1);

namespace App\Presenters;

use App\Models\Post;

final class PostUrlPresenter implements UrlPresenterInterface
{
    protected Post $post;

    public function __construct(Post $post)
    {
        $this->post = $post;
    }

    public function delete(): string
    {
        return route('posts.destroy', $this->post);
    }

    public function edit(): string
    {
        return route('posts.edit', $this->post);
    }

    public function show(): string
    {
        return route('posts.show', $this->post);
    }

    public function update(): string
    {
        return route('posts.update', $this->post);
    }

    public function __get($key)
    {
        if (method_exists($this, $key)) {
            return $this->$key();
        }

        return $this->$key;
    }
}
