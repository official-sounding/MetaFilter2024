<?php

declare(strict_types=1);

namespace App\Repositories;

interface PostRepositoryInterface extends BaseRepositoryInterface
{
    public function getBySubdomain();

    public function getPopularPosts();

    public function getRandomPost();

    public function getRecentPosts();
}
