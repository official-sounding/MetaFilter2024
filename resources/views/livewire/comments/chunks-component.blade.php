@for ($chunk = 0; $chunk < $page; $chunk++)
    <div wire:key="chunk-{{ $chunk }}">
            <livewire:comment-chunk
                :ids="$chunks[$chunk]"
                wire:key="chunk-{{ md5(json_encode($this->chunks[$chunk])) }}"
            />
    </div>
@endfor
