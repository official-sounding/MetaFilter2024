<form wire:submit.prevent="submit">
    @include('forms.partials.validation-summary')
    @include('forms.partials.csrf-token')
    <fieldset>
        <h2>Make your $5 (USD) payment</h2>

        <p>
            Your membership will be enabled once payment is complete, and in a few minutes
            you&rsquo;ll be able to log in and comment on MetaFilter and the other sites.
        </p>

        <small>
            If the $5 payment is a financial or logistical hardship, that&rsquo;s okay:
            <a href="{{ route($contactMessageRoute) }}">drop us a line</a> instead and we can waive the fee for you.
        </small>

        <div>
            <label for="paypal">PayPal</label>
            <span class="icon">
                <img src="{{ asset('images/icons/paypal.svg') }}" alt="">
            </span>

            <input type="radio" name="paymentMethod" id="paypal" value="paypal">

            <label for="stripe">Stripe</label>
            <span class="icon">
                <img src="{{ asset('images/icons/stripe.svg') }}" alt="">
            </span>

            <input type="radio" name="paymentMethod" id="stripe" value="stripe">
        </div>

        <button class="button primary-button" wire:click="payWithPayPal">
            Pay $5 via PayPal button/link
        </button>

        <button class="button primary-button" wire:click="payWithStripe">
            Pay $5 via Stripe button/link
        </button>
    </fieldset>

    <fieldset class="level">
        <x-forms.button type="submit">
            {{ trans('Next') }}
        </x-forms.button>
    </fieldset>
</form>
