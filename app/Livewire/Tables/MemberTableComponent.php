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
            ])
            ->where(column: 'state', operator: '=', value: UserStateEnum::Active);
    }
}
