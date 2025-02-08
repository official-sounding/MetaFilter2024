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

<section>
    <div class="mb-4 text-sm text-gray-600">
        {{ trans('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
    </div>

    <!-- Session Status -->

    <form method="POST" action="{{ route('password.email') }}">
        @include('forms.partials.csrf-token')

        <!-- Email Address -->
        <div>
            <label for="email">{{ trans('Email') }}</label>
            <input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-buttons.primary-button>
                {{ trans('Email Password Reset Link') }}
            </x-buttons.primary-button>
        </div>
    </form>
</section>
