<x-forms.form action="{{ route('password.update') }}">
    <x-forms.input
        name="email"
        type="email"
        autocomplete="true"
        text="{{ trans('Email Address') }}" />

    <x-forms.input
        name="password"
        type="password"
        text="{{ trans('Password') }}" />

    <x-forms.input
        name="password_confirmation"
        type="password"
        text="{{ trans('Confirm Password') }}" />

    <x-forms.button>
        {{ trans('Reset Password') }}
    </x-forms.button>
</x-forms.form>
<section>
    <form method="POST" action="{{ route('password.store') }}">
        @include('forms.partials.csrf-token')

        <!-- Password Reset Token -->
        <input type="hidden" name="token" value="{{ $request->route('token') }}">

        <!-- Email Address -->
        <div>
            <label for="email">{{ trans('Email') }}</label>
            <input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email', $request->email)" required autofocus autocomplete="username" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <label for="password">{{ trans('Password') }}</label>
            <input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <label for="password_confirmation">{{ trans('Confirm Password') }}</label>

            <input id="password_confirmation" class="block mt-1 w-full"
                          type="password"
                          name="password_confirmation" required autocomplete="new-password" />

        </div>

        <div class="flex items-center justify-end mt-4">
            <button>
                {{ trans('Reset Password') }}
            </button>
        </div>
    </form>
</section>
