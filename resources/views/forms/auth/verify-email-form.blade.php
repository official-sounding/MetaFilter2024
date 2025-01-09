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
<x-guest-layout>
    <div class="mb-4 text-sm text-gray-600">
        {{ trans('Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }}
    </div>

    @if (session('status') == 'verification-link-sent')
        <div class="mb-4 font-medium text-sm text-green-600">
            {{ trans('A new verification link has been sent to the email address you provided during registration.') }}
        </div>
    @endif

    <div class="mt-4 flex items-center justify-between">
        <form method="POST" action="{{ route('verification.send') }}">
            @include('forms.partials.csrf-token')

            <div>
                <x-primary-button>
                    {{ trans('Resend Verification Email') }}
                </x-primary-button>
            </div>
        </form>

        <form method="POST" action="{{ route('logout') }}">
            @include('forms.partials.csrf-token')

            <button type="submit" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                {{ trans('Log Out') }}
            </button>
        </form>
    </div>
</x-guest-layout>
