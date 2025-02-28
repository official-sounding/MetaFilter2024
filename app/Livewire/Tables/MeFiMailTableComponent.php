<?php

declare(strict_types=1);

namespace App\Livewire\Tables;

use App\Dtos\TableColumnDto;
use App\Models\MeFiMail;
use Illuminate\Database\Query\Builder;
use Livewire\WithPagination;

final class MeFiMailTableComponent extends TableComponent
{
    use WithPagination;

    public string $orderBy = 'date_created';

    public function columns(): array
    {
        return [
            new TableColumnDto(
                key: 'senderUsername',
                label: 'From',
                isRowHeader: true,
            ),
            new TableColumnDto(
                key: 'subject',
                label: 'Subject',
            ),
            new TableColumnDto(
                key: 'created_at',
                label: 'Date',
                dateFormat: 'M j, Y h:i a',
            ),
        ];
    }

    public function query(): ?Builder
    {
        if (isset(auth()->user()->id)) {
            return MeFiMail::query()
                ->join('users', 'mefi_mails.sender_id', '=', 'users.id')
                ->select([
                    'mefi_mails.id',
                    'mefi_mails.subject',
                    'mefi_mails.created_at',
                    'users.username AS senderUsername',
                ])
                ->where(column: 'mefi_mails.recipient_id', operator: '=', value: auth()->user()->id);
        }

        return null;
    }
}
