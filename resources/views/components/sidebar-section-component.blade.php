<section @if (!empty($class)) class="{{ $class }} @endif">
    @if ($open === true)
        <details open>
    @else
        <details>
    @endif
        <summary>
            <h3>{{  __($heading) }}</h3>
        </summary>

        {{ $slot }}
    </details>
{{-- Error is a false positive because of the conditional opening details tag --}}
</section>
