<form wire:submit="saveComment()">
    <small>posting as
        <a title="{{ __('View profile') }}"
            href="{{ route($profileRoute, [
            'user' => auth()->user()
        ]) }}">
            <stong>{{ auth()->user()->username }}</stong>
        </a>
    </small>

    <div wire:ignore>
        <textarea wire:model.live="contents" name="contents" id="wysiwyg"></textarea>
    </div>

    <button type="submit">
        {{ __('Post Comment') }}
    </button>
</form>
