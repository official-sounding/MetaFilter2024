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
            <span class="stepNumber">
                {{ $key + 1 }}
            </span>

            {{ trans($step) }}
        </li>
    @endforeach
</ol>
