<div>
    <table>
        <thead>
            <tr>
                @foreach ($this->columns() as $column)
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
                        @if ($column->isHeader)
                            <th scope="row">
                                {{ $row[$column->key] }}
                            </th>
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

</div>
