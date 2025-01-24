<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ trans('Update Password') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ trans('Ensure your account is using a long, random password to stay secure.') }}
        </p>
    </header>

    <form method="post" action="{{ route('password.update') }}" class="mt-6 space-y-6">
        @include('forms.partials.csrf-token')
        @method('put')

        <div>
            <label for="update_password_current_password">{{ trans('Current Password') }}</label>
            <input id="update_password_current_password" name="current_password" type="password" class="mt-1 block w-full" autocomplete="current-password" />
        </div>

        <div>
            <label for="update_password_password">{{ trans('New Password') }}</label>
            <input id="update_password_password" name="password" type="password" class="mt-1 block w-full" autocomplete="new-password" />
        </div>

        <div>
            <label for="update_password_password_confirmation">{{ trans('Confirm Password') }}</label>
            <input id="update_password_password_confirmation" name="password_confirmation" type="password" class="mt-1 block w-full" autocomplete="new-password" />
        </div>

        <div class="flex items-center gap-4">
            <x-primary-button>{{ trans('Save') }}</x-primary-button>

            @if (session('status') === 'password-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600"
                >{{ trans('Saved.') }}</p>
            @endif
        </div>
    </form>
</section>
