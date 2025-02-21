<div>
    <table>
        <thead>
            <tr>
                @foreach($this->columns() as $column)
                    <th scope="col">
                        {{ $column->label }}
                    </th>
                @endforeach
            </tr>
        </thead>
        <tbody>
            @foreach($this->data() as $row)
                <tr>
                    @foreach($this->columns() as $column)
                        @if (isset($column->isHeader) && $column->isHeader === true)
                            <th scope="row">
                                <x-dynamic-component
                                    :component="$column->component"
                                    :value="$row[$column->key]" />
                            </th>
                        @else
                            <td>
                                <x-dynamic-component
                                    :component="$column->component"
                                    :value="$row[$column->key]" />
                            </td>
                        @endif
                    @endforeach
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $this->data()->links() }}
</div>
