<div wire:ignore @if($isRequired === true) class="required" @endif>
    <label for="{{ $editorId }}">
        {{ $labelText }}
    </label>
    <textarea name="{{ $editorId }}" id="{{ $editorId }}" wire:model.lazy="content"></textarea>
</div>
