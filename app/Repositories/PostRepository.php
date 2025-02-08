<?php

declare(strict_types=1);

namespace App\Repositories;

use App\Enums\PostStateEnum;
use App\Models\Post;
use App\Traits\LoggingTrait;
use App\Traits\SubsiteTrait;
use Carbon\Carbon;
use Illuminate\Contracts\Pagination\CursorPaginator;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;

final class PostRepository extends BaseRepository implements PostRepositoryInterface
{
    use LoggingTrait;
    use SubsiteTrait;

    private const int POSTS_PER_PAGE = 20;
    private const array COLUMNS = [
        'posts.id',
        'posts.title',
        'posts.slug',
        'posts.link_text',
        'posts.link_url',
        'posts.body',
        'posts.created_at',
        'posts.deleted_at',
        'subsites.subdomain AS subdomain',
        'subsites.name AS subsite',
        'users.id AS user_id',
        'users.username',
    ];

    protected Builder $query;

    public function __construct(Post $model)
    {
        parent::__construct($model);
    }

    public function getPosts($popular = false): CursorPaginator
    {
        $query = $this->model->newQuery()
            ->join('users', 'posts.user_id', '=', 'users.id')
            ->join('subsites', 'posts.subsite_id', '=', 'subsites.id')
            ->where('subsites.subdomain', '=', $this->subdomain)
            ->select(self::COLUMNS)
            ->withCount([
                'comments',
                //                'favorites',
                //                'flags',
            ])
        ;

        $query->orderBy('posts.created_at', 'desc')->get();

        if ($popular) {
            // TODO: Add logic to get popular posts
        }

        return $query->cursorPaginate(self::POSTS_PER_PAGE);
    }

    public function getBySubdomain(int $page = 1): Collection
    {
        // TODO: Add categories
        return $this->model->newQuery()
            ->join('users', 'posts.user_id', '=', 'users.id')
            ->join('subsites', 'posts.subsite_id', '=', 'subsites.id')
            ->where('subsites.subdomain', '=', $this->subdomain)
            ->select(self::COLUMNS)
/*
            ->withCount([
                'comments',
                'favorites',
                'flags',
            ])
*/
            ->limit(self::POSTS_PER_PAGE)
            ->orderBy('posts.created_at', 'desc')
            ->get()
            ->groupBy(function ($val) {
                return Carbon::parse($val->created_at)->format('F j');
            });
    }

    public function getDraftPosts(): Collection
    {
        $query = $this->model->newQuery()
            ->join('users', 'posts.user_id', '=', 'users.id')
            ->join('subsites', 'posts.subsite_id', '=', 'subsites.id')
            ->where('subsites.subdomain', '=', $this->subdomain)
            ->where('posts.user_id', '=', auth()->user()->id)
            ->where('state', '!=', PostStateEnum::Draft->value)
            ->select(self::COLUMNS);

        $query->orderBy('posts.created_at', 'desc')->get();

        return $query->get();
    }

    public function getPopularPosts(): Collection
    {
        // TODO: rewrite to get popular posts
        return $this->model->newQuery()
            ->join('users', 'posts.user_id', '=', 'users.id')
            ->join('subsites', 'posts.subsite_id', '=', 'subsites.id')
            ->where('subsites.subdomain', '=', $this->subdomain)
            ->select(self::COLUMNS)
            ->withCount([
                'comments',
                'favorites',
                'flags',
            ])
            ->limit(self::POSTS_PER_PAGE)
            ->orderBy('posts.created_at', 'desc')->get()
            ->groupBy(function ($val) {
                return Carbon::parse($val->created_at)->format('F j');
            });
    }

    public function getRandomPost(): Post
    {
        $this->logDebugMessage('Getting random post');

        return $this->model->newQuery()
            ->join('users', 'posts.user_id', '=', 'users.id')
            ->join('subsites', 'posts.subsite_id', '=', 'subsites.id')
            ->where('subsites.subdomain', '=', $this->subdomain)
            ->withCount(['comments'])
            ->select(self::COLUMNS)
            ->inRandomOrder()
            ->limit(1)
            ->first();
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

    public function updateState(Post $post, string $state): void
    {
        $post->state = $state;

        $post->save();
    }

    public function getPopularFavorites(): array
    {
        return [];
    }
}
