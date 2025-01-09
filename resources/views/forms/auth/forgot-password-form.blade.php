<x-forms.form action="{{ route('password.email') }}">
    @include('forms.partials.required-fields-note')
    @include('forms.partials.validation-summary')

    <x-forms.input
        name="email"
        type="email"
        autocomplete="true"
        label="{{ trans('Email Address') }}" />

    <x-forms.button>
        {{ trans('Send Password Reset Link') }}
    </x-forms.button>
</x-forms.form>

<x-guest-layout>
    <div class="mb-4 text-sm text-gray-600">
        {{ trans('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('password.email') }}">
        @include('forms.partials.csrf-token')

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="trans('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button>
                {{ trans('Email Password Reset Link') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
