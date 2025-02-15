<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ trans('Update Password') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ trans('Ensure your account is using a long, random password to stay secure.') }}
        </p>
    </header>

    <form method="post" action="{{ route('password.update') }}">
        @include('forms.partials.csrf-token')
        @method('put')

        <div>
            <label for="update_password_current_password">
                {{ trans('Current Password') }}
            </label>
            <input
                id="update_password_current_password"
                name="current_password"
                type="password"
                autocomplete="current-password"
            />
        </div>

        <div>
            <label for="update_password_password">
                {{ trans('New Password') }}
            </label>
            <input
                id="update_password_password"
                name="password"
                type="password"
                autocomplete="new-password"
            />
        </div>

        <div>
            <label for="update_password_password_confirmation">
                {{ trans('Confirm Password') }}
            </label>
            <input
                id="update_password_password_confirmation"
                name="password_confirmation"
                type="password"
                autocomplete="new-password"
            />
        </div>

        <div>
            <button class="button primary-button">
                {{ trans('Save') }}
            </button>

            @if (session('status') === 'password-updated')
                <p x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)">
                    {{ trans('Saved.') }}
                </p>
            @endif
        </div>
    </form>
</section>
