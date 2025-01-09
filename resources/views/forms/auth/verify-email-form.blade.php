<section>
    <p>
        {{ trans('Before proceeding, please check your email for a verification link.') }}
        trans
    <p>
        {{ trans('If you did not receive the email') }},
    </p>

    @if (session('resent'))
        <div class="notification is-success" role="alert">
            {{ trans('A fresh verification link has been sent to your email address.') }}
        </div>

        {{ trans('Before proceeding, please check your email for a verification link.') }}
        {{ trans('If you did not receive the email') }},
    @endif

    <x-forms.form action="{{ route('verification.send') }}">
        <x-forms.button>
            {{ trans('Send Another Password Reset Link') }}
        </x-forms.button>
    </x-forms.form>
</section>
