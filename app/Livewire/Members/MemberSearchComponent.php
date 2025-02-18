<?php

declare(strict_types=1);

namespace App\Livewire\Members;

use App\Models\User;
use App\Repositories\UserRepositoryInterface;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Component;
use Livewire\WithPagination;

final class MemberSearchComponent extends Component
{
    use WithPagination;

    public Collection $activeMembers;
    public string $orderByColumn = 'username';
    public string $order = 'asc';
    protected int $perPage = 20;

    private UserRepositoryInterface $userRepository;

    public function boot(UserRepositoryInterface $userRepository): void
    {
        $this->userRepository = $userRepository;
    }
    public array $searchColumns = [
        'username' => '',
        'id' => '',
    ];

    public function render(): View
    {
        $this->activeMembers = $this->userRepository->getActiveMembers();

        return view('livewire.members.member-search-component', [
            'activeMembers' => $this->activeMembers,
        ]);
    }

    public function sortBy(string $column): void
    {
        if ($this->orderByColumn == $column) {
            $this->order = $this->order == 'asc' ? 'desc' : 'asc';
        }

        $this->orderByColumn = $column;
    }

    public function getActiveMembers()
    {
        return $this->getActiveMembersQuery()->paginate($this->perPage);
    }

    public function getActiveMembersQuery()
    {
        return User::query()
            ->orderBy($this->orderByColumn, $this->order)
            ->when($this->searchColumns['id'], function ($query) {
                $query->whereLike('id', trim($this->searchColumns['id']));
            })
            ->when($this->searchColumns['username'], function ($query) {
                $query->whereLike('username', trim($this->searchColumns['username']));
            });
    }
}
/*
<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\DummyProduct;
use Livewire\WithPagination;

class DataTableComponent extends Component
{

    protected $paginationTheme = 'bootstrap';





} */
