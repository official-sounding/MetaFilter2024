<form
    method="{{ $method }}"
    action="{{ $action }}"
    @if ($class !== '')
        class="{{ $class }}"
    @endif
    @if ($upload === true)
        enctype="multipart/form-data"
    @endif>

    @include('forms.partials.csrf-token')
    @include('forms.partials.validation-summary')

    @if ($showRequiredFieldsNote === true)
        @include('forms.partials.required-fields-note')
    @endif

    {{ $slot }}
</form>
