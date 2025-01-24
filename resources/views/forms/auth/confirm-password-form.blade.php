<div class="mb-4 text-sm text-gray-600">
    {{ trans('This is a secure area of the application. Please confirm your password before continuing.') }}
</div>

<form method="POST" action="{{ route('password.confirm') }}">
    @include('forms.partials.csrf-token')

    <!-- Password -->
    <div>
        <label for="password">{{ trans('Password') }}</label>

        <input id="password" class="block mt-1 w-full"
                      type="password"
                      name="password"
                      required autocomplete="current-password" />

    </div>

    <div class="flex justify-end mt-4">
        <button>
            {{ trans('Confirm') }}
        </button>
    </div>
</form>
