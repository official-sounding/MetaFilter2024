<form wire:submit.prevent="submitBody()">
    @include('forms.partials.validation-summary')
    @include('forms.partials.csrf-token')

    <div wire:ignore>
        <x-forms.textarea
            name="body"
            label="{{ trans('Body') }}"
            :required="true"
        />
    </div>

    <div wire:ignore>
        <x-forms.textarea
            name="more_inside"
            label="{{ trans('More Inside') }}"
            :required="false"
        />
    </div>

    <fieldset class="level">
        <x-forms.button type="submit">
            {{ trans('Next') }}
        </x-forms.button>
    </fieldset>
</form>
