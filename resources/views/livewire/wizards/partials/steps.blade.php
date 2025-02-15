<ol class="steps">
    @foreach ($steps as $key => $step)
        <li
            @if ($key + 1 < $currentStep)
                class="pastStep"
            @endif
            @if ($currentStep === $key + 1)
                aria-current="step"
            @endif
        >
            {{ trans($step) }}
        </li>
    @endforeach
</ol>
