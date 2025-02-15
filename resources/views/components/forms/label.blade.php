<label
    for="{{ $for }}"
    class="
    @if (isset($required) && $required === true)
        required
    @else
        optional
   @endif">
    {{ trans($label) }}
</label>
