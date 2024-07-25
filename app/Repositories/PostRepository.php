<?php

declare(strict_types=1);

namespace App\Repositories;

use App\Models\Post;
use App\Traits\LoggingTrait;
use App\Traits\SubsiteTrait;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;

final class PostRepository extends BaseRepository implements PostRepositoryInterface
{
    use LoggingTrait;
    use SubsiteTrait;

    private const array COLUMNS = [
        'posts.id',
        'posts.title',
        'posts.slug',
        'posts.url',
        'posts.body',
        'posts.created_at',
        'posts.deleted_at',
        'subsites.name as subsite',
        'users.id as user_id',
        'users.username',
    ];

    protected Builder $query;

    public function __construct(Post $model)
    {
        parent::__construct($model);
    }

    public function getBySubdomain(): array|Collection
    {
        // TODO: Add categories

        return $this->model->newQuery()
            ->join('users', 'posts.user_id', '=', 'users.id')
            ->join('subsites', 'posts.subsite_id', '=', 'subsites.id')
            ->where('subsites.subdomain', '=', $this->subdomain)
            ->withCount(['comments'])
            ->select(self::COLUMNS)
            ->orderBy('posts.created_at', 'desc')
            ->get()
            ->groupBy(fn($item) => $item->created_at->format('F j'));
    }

    public function getPopularPosts()
    {
        // TODO: get popular posts
    }

    public function getRandomPost()
    {
        // TODO: Implement getRandomPost() method.
    }

    public function getRecentPosts(): array|Collection
    {
        $query = collect($this->query);

        $query->groupBy(fn($item) => $item->created_at->format('F j'));

        return $this->model->newQuery()
            ->join('users', 'posts.user_id', '=', 'users.id')
            ->join('subsites', 'posts.subsite_id', '=', 'subsites.id')
            ->where('subsites.subdomain', '=', $this->subdomain)
            ->withCount(['comments'])
            ->select(self::COLUMNS)
            ->orderBy('posts.created_at', 'desc')
            ->get()
            ->groupBy(fn($item) => $item->created_at->format('F j'));
    }
}
