<?php

declare(strict_types=1);

namespace App\Livewire\Posts;

use App\Traits\PaginationTrait;
use App\Traits\PostTrait;
use App\Traits\SubsiteTrait;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Builder;
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

    public int $page = 1;
    public int $perPage = 20;
    public string $orderBy = 'created_at';
    public string $sortDirection = self::DESCENDING;

    public string $subdomain;

    public function boot(): void
    {
        $this->subdomain = $this->getSubdomain();
    }

    public function render(): View
    {
        return view('livewire.posts.post-index-component');
    }

    public function query(): Builder
    {
        return $this->baseQuery($this->subdomain);
    }
}
