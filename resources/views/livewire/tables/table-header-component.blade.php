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
