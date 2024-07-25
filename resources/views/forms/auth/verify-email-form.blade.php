<section>
    <p>
        {{ __('Before proceeding, please check your email for a verification link.') }}
    </p>
    <p>
        {{ __('If you did not receive the email') }},
    </p>

    @if (session('resent'))
        <div class="notification is-success" role="alert">
            {{ __('A fresh verification link has been sent to your email address.') }}
        </div>

        {{ __('Before proceeding, please check your email for a verification link.') }}
        {{ __('If you did not receive the email') }},
    @endif

    <x-forms.form action="{{ route('verification.send') }}">
        <x-forms.button>
            {{ __('Send Another Password Reset Link') }}
        </x-forms.button>
    </x-forms.form>
</section>
