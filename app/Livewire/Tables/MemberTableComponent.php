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
        return User::query()
            ->select([
                'id',
                'username',


                //https://medium.com/@hnishad020/how-to-build-a-powerful-search-feature-in-laravel-livewire-4c3b546fe4ef
            ])
        //if (empty($this->searchColumns['title']) && empty($this->searchColumns['description'])) {

        ->when(
                $this->searchId > 0,
                fn (Builder $query) => $query->where(
                    column: 'author_id',
                    operator: '=',
                    value: $this->searchId
                )
            )
            ->when(
                !empty($this->columns('username')),
                fn (Builder $query) => $query->where(
                    column: 'name',
                    operator: 'like',
                    value: '%'. $this->searchUsername .'%'
                )
            )
            ->where(column: 'state', operator: '=', value: UserStateEnum::Active);
    }

    public function updating($key): void
    {
        if ($key === 'searchId' || $key === 'searchUsername') {
            $this->resetPage();
        }
    }
}
