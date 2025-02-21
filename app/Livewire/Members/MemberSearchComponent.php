<?php

declare(strict_types=1);

namespace App\Livewire\Members;

use App\Models\User;
use App\Repositories\UserRepositoryInterface;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Collection;
use Livewire\Component;
use Livewire\WithPagination;

final class MemberSearchComponent extends Component
{
    use WithPagination;

    public Collection $members;
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

    public function mount(): void
    {
        $this->members = $this->getActiveMembers();
    }

    public function render(): View
    {
        $members = $this->getActiveMembers();

        return view('livewire.members.member-search-component', [
            'members' => $members,
        ]);
    }

    public function sortBy(string $column): void
    {
        if ($this->orderByColumn === $column) {
            $this->order = $this->order === 'asc' ? 'desc' : 'asc';
        }

        $this->orderByColumn = $column;
    }

    public function getActiveMembers()
    {
        return $this->userRepository->getActiveMembers();
    }

    public function getDummyProductsQueryProperty()
    {
        return User::query()
            ->orderBy($this->orderByColumn, $this->order)
            ->when($this->searchColumns['username'], function ($query) {
                $query->whereLike('username', trim($this->searchColumns['username']));
            })
            ->when($this->searchColumns['id'], function ($query) {
                $query->whereLike('id', trim($this->searchColumns['id']));
            });
    }
}
