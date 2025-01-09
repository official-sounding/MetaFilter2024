@props([
    'name'
])

@error($name)
    <img src="{{ asset('images/icons/exclamation-triangle-fill.svg') }}" alt="">
    <small class="text-danger error">{{ $message }}</small>
@enderror
