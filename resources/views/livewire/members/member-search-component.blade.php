<div>
    <table>
        <thead>
            <tr>
                <th scope="col" wire:click="sortBy('username')">
                    {{ trans('Username') }}
                    @if ($this->order == 'asc' && $this->orderByColumn == 'description')
                        <span class="icon">
                            <img src="{{ asset('images/icons/caret-up-fill.svg') }}" alt="">
                        </span>
                    @elseif ($this->order == 'desc' && $this->orderByColumn == 'description')
                        <span class="icon">
                            <img src="{{ asset('images/icons/caret-down-fill.svg') }}" alt="">
                        </span>
                    @endif
                </th>
                <th scope="col" wire:click="sortBy('id')">
                    {{ trans('User ID') }}
                    @if ($this->order == 'asc' && $this->orderByColumn == 'id')
                        <span class="icon">
                            <img src="{{ asset('images/icons/caret-up-fill.svg') }}" alt="">
                        </span>
                    @elseif ($this->order == 'desc' && $this->orderByColumn == 'id')
                        <span class="icon">
                            <img src="{{ asset('images/icons/caret-down-fill.svg') }}" alt="">
                        </span>
                    @endif
                </th>
            </tr>
            <tr>
                <td>
                    <input
                        type="text"
                        placeholder="Search..."
                        autocomplete="off"
                        wire:model.live="searchColumns.username">
                </td>
                <td>
                    <input
                        type="text"
                        placeholder="Search..."
                        autocomplete="off"
                        wire:model.live="searchColumns.id">
                </td>
            </tr>
        </thead>
        <tbody class="striped">
            @foreach ($this->activeMembers as $member)
                <tr>
                    <td>
                        {{ $member->username }}
                    </td>
                    <td>
                        {{ $member->id ?? '' }}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $this->activeMembers->links() }}
</div>
