<?php

declare(strict_types=1);

namespace App\Livewire\Posts;

use App\Models\Post;
use App\Traits\PaginationTrait;
use App\Traits\PostTrait;
use App\Traits\SubsiteTrait;
use Carbon\Carbon;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Pagination\Paginator;
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
        'subsites.subdomain AS subdomain',
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

        $this->days = (new Post())->select(self::COLUMNS)
            ->orderBy('created_at', self::DESCENDING)
            ->get()
            ->groupBy(function ($post) {
                return Carbon::parse($post->created_at)->format('F j');
            });
    }

    public function render(): View
    {
        return view('livewire.posts.post-index-component');
    }

    public function query(): Builder
    {
        return $this->baseQuery($this->subdomain);
    }

    private function paginate()
    {
        // https://jenssegers.com/laravel-pagination-with-grouping-and-eager-loading
        // https://laracasts.com/discuss/channels/general-discussion/handling-over-7k-records-groupby-and-pagination
        // https://www.devopsfreelancer.com/blog/how-to-group-a-collection-by-day-month-and-year-in-laravel/

        $results = (new Post())->groupBy(function ($post){
            return Carbon::parse($post->created_at)->format('F j');
        })->get();

        $total = count($results);
        $start = (Paginator::getCurrentPage() - 1) * self::PER_PAGE;
        $sliced = array_slice((array)$results, $start, self::PER_PAGE);

        $collection = Post::hydrate($sliced);

        $collection->load('relation');

        return Paginator::make($collection->all(), $total, self::PER_PAGE);
    }

    )
}
