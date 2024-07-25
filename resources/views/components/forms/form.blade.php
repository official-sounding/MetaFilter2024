@props([
    'action',
    'class' => null,
    'method' => 'POST',
    'showRequiredFieldsNote' => true,
    'upload' => false,
])

<form
    method="{{ $method }}"
    action="{{ $action }}"
    @if ($class !== null)
        class="{{ $class }}"
    @endif
    @if ($upload === true)
        enctype="multipart/form-data"
    @endif>
    @csrf

    @include('forms.partials.validation-summary')

    @if ($showRequiredFieldsNote === true)
        @include('forms.partials.required-fields-note')
    @endif

    {{ $slot }}
</form>
