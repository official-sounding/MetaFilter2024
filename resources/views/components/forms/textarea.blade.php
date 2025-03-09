@props([
    'label',
    'name',
    'note' => null,
    'required',
])

<x-forms.field>
    <x-forms.label
        :for="$name"
        :label="$label"
        :required="$required" />

    @if (!empty($note))
        <small class="form-note">
            {!! $note !!}
        </small>
    @endif

    <textarea
        name="{{ $name }}"
        id="{{ $name }}"
        class="wysiwyg"
        wire:model.live="{{ $name }}">
        {{ old($name) }}
    </textarea>

    <x-forms.error name="{{ $name }}" />
</x-forms.field>
