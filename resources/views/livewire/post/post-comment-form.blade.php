
<form wire:submit="save()">
    @include('forms.partials.validation-summary')

    <small>posting as
        <a title="{{ __('View profile') }}"
            href="{{ route($profileRoute, [
            'user' => auth()->user()
        ]) }}">
            <stong>{{ auth()->user()->username }}</stong>
        </a>
    </small>


    <div wire:ignore>
        <textarea
            wire:model.live="contents"
            name="contents"
            id="wysiwyg">
            {!! $contents !!}
        </textarea>

        Livewire contents property : {{ $contents }}
    </div>

    <button type="submit">
        {{ __('Add Comment') }}
    </button>
</form>
