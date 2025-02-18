<form class="has-steps">
    <article class="post">
        <header class="post-header">
            <h3>
                <a href="#">
                    {{ $post->title ?? '' }}
                </a>
            </h3>
        </header>
        preview
    </article>

    <div class="level">
        <x-forms.button
            class="tertiary-button previous-step"
            type="button"
            wire:click.prevent="goToStep(1)">
            {{ trans('Edit') }}
        </x-forms.button>

        <x-forms.button
            class="secondary-button previous-step"
            type="button"
            wire:click.prevent="saveAsDraft()">
            {{ trans('Save as Draft') }}
        </x-forms.button>

        <x-forms.button
            type="submit"
            class="primary-button next-step"
            wire:click.prevent="publishPost()">
            {{ trans('Post') }}
        </x-forms.button>
    </div>
</form>
