<?php

declare(strict_types=1);

namespace App\Livewire\Posts;

use App\Models\Post;
use App\Traits\PaginationTrait;
use App\Traits\PostTrait;
use App\Traits\SubsiteTrait;
use Illuminate\Contracts\Pagination\CursorPaginator;
use Illuminate\Contracts\View\View;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\WithPagination;

final class PostIndexComponent extends Component
{
    use PaginationTrait;
    use PostTrait;
    use SubsiteTrait;
    use WithPagination;

    protected const string ASCENDING = 'asc';
    protected const string DESCENDING = 'desc';
    protected const array COLUMNS = [
        'posts.id',
        'posts.title',
        'posts.slug',
        'posts.link_text',
        'posts.link_url',
        'posts.body',
        'posts.created_at',
        'posts.deleted_at',
        'subsites.subdomain',
        'subsites.name AS subsite',
        'users.id AS user_id',
        'users.username',
    ];

    protected const int PER_PAGE = 20;

    public int $page = 1;
    public int $perPage = 20;
    public string $orderBy = 'created_at';
    public string $sortDirection = self::DESCENDING;
    public string $subdomain;
    public mixed $groupedPosts;
    public mixed $days;

    public function boot(): void
    {
        $this->subdomain = $this->getSubdomain();
    }

    public function render(): View
    {
        $posts = $this->getPosts();

        return view('livewire.posts.post-index-component', [
            'posts' => $posts,
        ]);
    }

    private function getPosts(): CursorPaginator
    {
        return Post::select(
            DB::raw('DATE_FORMAT(posts.created_at, "%m-%d") as month_day'),
            DB::raw('COUNT(*) as total_posts'),
            'posts.id',
            'posts.title',
            'posts.slug',
            'posts.body',
            'posts.user_id',
            'posts.created_at',
        )
        ->join(table: 'users', first: 'posts.user_id', operator: '=', second: 'users.id')
        ->join(table: 'subsites', first: 'posts.subsite_id', operator: '=', second: 'subsites.id')
        ->where(column: 'subsites.subdomain', operator: '=', value: $this->subdomain)
        ->with([
            'user',
        ])
        ->withCount([
            'comments',
            'favorites',
            'flags',
        ])
        ->groupBy('month_day', 'id', 'title', 'created_at')
        ->orderBy(column: 'posts.created_at', direction: self::DESCENDING)
        ->cursorPaginate(perPage: self::PER_PAGE);
    }
}

// https://jenssegers.com/laravel-pagination-with-grouping-and-eager-loading
// https://laracasts.com/discuss/channels/general-discussion/handling-over-7k-records-groupby-and-pagination
// https://www.devopsfreelancer.com/blog/how-to-group-a-collection-by-day-month-and-year-in-laravel/
/*
 *         $posts = Post::with([
    'user',
])
->withCount([
    'comments',
    'favorites',
    'flags',
])
->get()
->groupBy('created_at')
->toArray();

$currentPage = LengthAwarePaginator::resolveCurrentPage();

$currentPosts = array_slice($posts, self::PER_PAGE * ($currentPage - 1), self::PER_PAGE);

return new LengthAwarePaginator($currentPosts, count($posts), self::PER_PAGE, $currentPage);


        $results = (new Post())->groupBy(function ($post){
            return Carbon::parse($post->created_at)->format('F j');
        })->get();

        $total = count($results);
        $start = (Paginator::getCurrentPage() - 1) * self::PER_PAGE;
        $sliced = array_slice((array)$results, $start, self::PER_PAGE);

        $collection = Post::hydrate($sliced);

        $collection->load('relation');

        return Paginator::make($collection->all(), $total, self::PER_PAGE);

        $this->days = (new Post())
            ->join('users', 'posts.user_id', '=', 'users.id')
            ->join('subsites', 'posts.subsite_id', '=', 'subsites.id')
            ->where('subsites.subdomain', '=', $this->subdomain)
            ->select(self::COLUMNS)
            ->withCount([
                'comments',
                'favorites',
                'flags',
            ])
            ->orderBy('created_at', self::DESCENDING)
            ->groupBy(function ($post) {
                return Carbon::parse($post->created_at)->format('F j');
            })
            ->get();
*/
