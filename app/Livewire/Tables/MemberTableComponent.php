<?php

declare(strict_types=1);

namespace App\Livewire\Tables;

use App\Dtos\TableColumnDto;
use App\Enums\UserStateEnum;
use App\Models\User;
use Illuminate\Database\Eloquent\Builder;
use Livewire\WithPagination;

final class MemberTableComponent extends TableComponent
{
    use WithPagination;

    public int $searchId = 0;
    public string $searchUsername = '';
    public string $orderBy = 'username';

    public function columns(): array
    {
        return [
            new TableColumnDto(
                key: 'username',
                label: 'Username',
                isRowHeader: true,
            ),
            new TableColumnDto(
                key: 'id',
                label: 'ID',
            ),
        ];
    }

    public function query(): Builder|null
    {
        $query = User::query()
            ->select([
                'id',
                'username',
            ])
/*
            ->when($this->searchColumns['id'] !== '', fn(Builder $query) => $query->where(
                'name', 'like', '%'. trim($this->searchColumns['id']) .'%'
            ))
            ->when($this->$this->searchColumns['username'] !== '', fn(Builder $query) => $query->where(
                'name', 'like', '%'. trim($this->searchColumns['username']) .'%'
            ))
*/
            ->where(column: 'state', operator: '=', value: UserStateEnum::Active);

        //https://medium.com/@hnishad020/how-to-build-a-powerful-search-feature-in-laravel-livewire-4c3b546fe4ef

        return $query;
    }

    public function updating($key): void
    {
        if ($key === 'searchId' || $key === 'searchUsername') {
            $this->resetPage();
        }
    }
}
