<table>
    <thead>
        <tr>
            @foreach ($this->columns() as $column)
                <th scope="col"
                    wire:click="sort('{{ $column->key }}')"
                    title="Sort by {{ $column->label }}">
                    {{ $column->label }}

                    @if ($orderBy === $column->key)
                        @if ($sortDirection === 'asc')
                            <x-icons.icon-component filename="sort-up"/>
                        @else
                            <x-icons.icon-component filename="sort-down"/>
                        @endif
                    @endif
                </th>
            @endforeach
        </tr>
    </thead>
    <tbody>
        <tr>
            @foreach ($this->columns() as $column)
                <td>
                    <input
                        type="text"
                        placeholder="Filter..."
                        autocomplete="off"
                        wire:model.live="searchColumns.{{ $column->key }}">
                </td>
            @endforeach
        </tr>
        @foreach ($this->data() as $row)
            <tr>
                @foreach ($this->columns() as $column)
                    @if ($column->isRowHeader)
                        <th scope="row">
                            @if (isset($row->id) && $column->key === 'username')
                                <a href="/members/{{ $row->id }}">
                                    {{ $row[$column->key] }}
                                </a>
                            @else
                                {{ $row[$column->key] }}
                            @endif
                        </th>
                    @elseif (!is_null($column->dateFormat))
                        <x-dates.formatted-date-time-component :date="$row[$column->key]" :format="$column->dateFormat" />
                    @else
                        <td>
                            {{ $row[$column->key] }}
                        </td>
                    @endif
                @endforeach
            </tr>
        @endforeach
    </tbody>
    <tfoot>
        <tr>
            <td colspan="{{ count($this->columns()) }}">
                {{ $this->data()->links() }}
            </td>
        </tr>
    </tfoot>
</table>
