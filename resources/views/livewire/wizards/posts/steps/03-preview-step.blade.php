<form class="has-steps">
    <article class="post">
        <header class="post-header">
            <h3>
                <a href="#">
                    {{ $post->title ?? '' }}
                </a>
            </h3>
        </header>

        {{ $post->body ?? '' }}

        {{ $post->more_inside ?? '' }}
    </article>

    <div class="level">
        <x-forms.button
            class="tertiary-button previous-step"
            type="button"
            wire:click="goToStep(1)">
            {{ trans('Edit') }}
        </x-forms.button>

        <x-forms.button
            type="button"
            class="secondary-button previous-step"
            wire:click="saveAsDraft({{ $post->id }}">
            {{ trans('Save as Draft') }}
        </x-forms.button>

        <x-forms.button
            type="button"
            class="primary-button next-step"
            wire:click="publishPost({{ $post->id }})">
            {{ trans('Post') }}
        </x-forms.button>
    </div>
</form>
