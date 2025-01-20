<section>
    <h2>Make your $5 (USD) payment</h2>

    <p>
        Your membership will be enabled once payment is complete, and in a few minutes
        you&rsquo;ll be able to log in and comment on MetaFilter and the other sites.
    </p>

    <small>
        If the $5 payment is a financial or logistical hardship, that&rsquo;s okay:
        <a href="{{ route($contactMessageRoute) }}">drop us a line</a> instead and we can waive the fee for you.
    </small>

    <button class="button primary-button" wire:click="payWithPayPal">
        {{ trans('Pay $5 via PayPal') }}
    </button>

    <button class="button primary-button" wire:click="payWithStripe">
        {{ trans('Pay $5 via Stripe') }}
    </button>
</section>
