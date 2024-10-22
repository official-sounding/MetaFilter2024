@if (count($items) === 1)
    <a href="{{ route($items[0]['route']) }}" class="button">
        {{ $items[0]['text'] ?? $defaultText }}
    </a>
@else
    <button class="button">
        {{ $defaultText }}
    </button>

    @foreach ($items as $item)
        <a href="{{ route($item['route']) }}" class="button">
            {{ $item['text'] ?? $defaultText }}
        </a>
    @endforeach
@endif
