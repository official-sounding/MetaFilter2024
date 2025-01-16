<div class="previous-next">
    @if (isset($nextStep))
        <button type="button" class="button primary-button previous" wire:click="back({{ $nextStep }})">
            {{ trans('Previous') }}
        </button>
    @endif

    <button type="submit" class="button primary-button next" wire:click="{{ $nextStep }}">
        {{ trans('Next') }}
    </button>
</div>
