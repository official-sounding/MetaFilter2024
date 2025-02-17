<div>
    <table>
        <thead>
            <tr>
                <th scope="col" wire:click="sortBy('username')">
                    {{ trans('Username') }}
                    @if ($this->order == 'asc' && $this->orderByColumn == 'description')
                        <x-icons.icon-component filename="caret-up-fill" />
                    @elseif ($this->order == 'desc' && $this->orderByColumn == 'description')
                        <x-icons.icon-component filename="caret-down-fill" />
                    @endif
                </th>
                <th scope="col" wire:click="sortBy('id')">
                    {{ trans('User ID') }}
                    @if ($this->order == 'asc' && $this->orderByColumn == 'id')
                        <x-icons.icon-component filename="caret-up-fill" />
                    @elseif ($this->order == 'desc' && $this->orderByColumn == 'id')
                        <x-icons.icon-component filename="caret-down-fill" />
                    @endif
                </th>
            </tr>
            <tr>
                <td>
                    <input
                        type="text"
                        placeholder="{{ trans('Filter') }}..."
                        autocomplete="off"
                        wire:model.live="searchColumns.username">
                </td>
                <td>
                    <input
                        type="text"
                        placeholder="{{ trans('Filter') }}..."
                        autocomplete="off"
                        wire:model.live="searchColumns.id">
                </td>
            </tr>
        </thead>
        <tbody class="striped">
            @foreach ($this->activeMembers as $member)
                <tr>
                    <td>
                        <x-members.profile-link-component :user="$member" />
                    </td>
                    <td>
                        {{ $member->legacy_id ?: $member->id }}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{--
    // TODO: Add pagination
    {{ $this->activeMembers->links() }}
    --}}
</div>
