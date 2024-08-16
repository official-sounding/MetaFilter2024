<form wire:submit="save">
    <small>posting as
        <a title="{{ __('View profile') }}"
            href="{{ route($profileRoute, [
            'user' => auth()->user()
        ]) }}">
            <stong>{{ auth()->user()->username }}</stong>
        </a>
    </small>

    <div id="wysiwyg"></div>

    <button type="submit">
        {{ __('Post Comment') }}
    </button>
</form>
