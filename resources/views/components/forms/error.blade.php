@props([
    'name'
])

@error($name)
    <small class="text-danger error">{{ $message }}</small>
@enderror
