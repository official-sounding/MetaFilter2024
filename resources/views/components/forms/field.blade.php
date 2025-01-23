<div class="field">
    {{ $slot }}
</div>

@if ($note !== '')
    <p class="note">{!! $note !!}</p>
@endif
