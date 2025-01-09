<div class="mb-4 text-sm text-gray-600">
    {{ trans('This is a secure area of the application. Please confirm your password before continuing.') }}
</div>

<form method="POST" action="{{ route('password.confirm') }}">
    @include('forms.partials.csrf-token')

    <!-- Password -->
    <div>
        <x-input-label for="password" :value="trans('Password')" />

        <x-text-input id="password" class="block mt-1 w-full"
                      type="password"
                      name="password"
                      required autocomplete="current-password" />

        <x-input-error :messages="$errors->get('password')" class="mt-2" />
    </div>

    <div class="flex justify-end mt-4">
        <x-primary-button>
            {{ trans('Confirm') }}
        </x-primary-button>
    </div>
</form>
