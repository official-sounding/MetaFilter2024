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
        <textarea wire:model.live="contents" name="contents" id="contents"></textarea>
    </div>

    <button type="submit">
        {{ __('Add Comment') }}
    </button>
</form>

@push('scripts')
    <script src="https://cdn.ckeditor.com/ckeditor5/27.1.0/classic/ckeditor.js"></script>
    <script>
        ClassicEditor
            .create(document.querySelector('#contents'))
            .then(editor => {
                editor.model.document.on('change:data', () => {
                    @this.set('contents', editor.getData());
                })
            })
            .catch(error => {
                console.error(error);
            });
    </script>
@endpush
