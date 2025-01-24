<ol class="steps">
    @foreach ($steps as $key => $step)
        <li>
            <button wire:click="switchStep({{ $key + 1 }})" @if ($currentStep === $key + 1) aria-current="step" @endif>
                {{ trans($step) }}
            </button>
        </li>
    @endforeach
</ol>
