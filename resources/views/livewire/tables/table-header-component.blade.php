<thead>
    <tr>
        @foreach ($headers as $header)
            <th wire:click="sortBy({{ $header['slug'] }})" scope="col">
                {{ trans($header) }}
                @if ($this->order == 'asc' && $this->orderByColumn === $header['slug'])
                    <x-icons.icon-component filename="globe" />
                @elseif ($this->order == 'desc' && $this->orderByColumn === $header['slug'])
                    <x-icons.icon-component filename="globe" />
                @else
                    <x-icons.icon-component filename="globe" />
                @endif
            </th>
        @endforeach
    </tr>
</thead>
<thead>
<tr>
    <th class="w-1">No.
    </th>
    @foreach($columns as $key => $value)
        @if($value['isDataColumn'])
            <th  wire:click="doSort('{{ $value['column'] }}')">
                <x-datatable-column  :sortColumn="$sortColumn" :sortDirection="$sortDirection" columnName="{{ $value['label'] }}" />
            </th>
        @else
            <th>{{ $value['label'] }}</th>
        @endif
    @endforeach
</tr>
</thead>
