<?php

declare(strict_types=1);

namespace App\Livewire\Tables;

use App\Enums\UserStateEnum;
use App\Models\User;
use App\View\Components\Tables\Column;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Builder;

final class MemberTable extends TableComponent
{
    public function columns(): array
    {
        return [
            Column::make('username', 'Username', true),
            Column::make('id', 'ID'),
        ];
    }

    public function query(): Builder
    {
        return User::query()
            ->where('state', '=', UserStateEnum::Active)
            ->orderBy('username');
    }

    public function render(): View
    {
        return view('livewire.tables.table');
    }

}
