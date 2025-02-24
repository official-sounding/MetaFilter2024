<thead>
    <tr>
        @foreach ($columns as $column)
            <th scope="col" wire:click="sort('{{ $column->key }}')" title="Sort by {{ $column->label }}">
                {{ $column->label }}

                @if ($orderBy === $column->key)
                    @if ($sortDirection === 'asc')
                        <x-icons.icon-component filename="sort-up" />
                    @else
                        <x-icons.icon-component filename="sort-down" />
                    @endif
                @endif
            </th>
        @endforeach
    </tr>
</thead>
