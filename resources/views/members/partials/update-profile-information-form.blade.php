<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ trans('Profile Information') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ trans("Update your account's members information and email address.") }}
        </p>
    </header>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @include('forms.partials.csrf-token')
    </form>

    <form method="post" action="{{ route('members.update') }}" class="mt-6 space-y-6">
        @include('forms.partials.csrf-token')
        @method('patch')

        <div>
            <label for="name">{{ trans('Name') }}</label>
            <input id="name" name="name" type="text" class="mt-1 block w-full" :value="old('name', $user->name)" required autofocus autocomplete="name" />
        </div>

        <div>
            <label for="email">{{ trans('Email') }}</label>
            <input id="email" name="email" type="email" class="mt-1 block w-full" :value="old('email', $user->email)" required autocomplete="username" />

            @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                <div>
                    <p class="text-sm mt-2 text-gray-800">
                        {{ trans('Your email address is unverified.') }}

                        <button form="send-verification" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            {{ trans('Click here to re-send the verification email.') }}
                        </button>
                    </p>

                    @if (session('status') === 'verification-link-sent')
                        <p class="mt-2 font-medium text-sm text-green-600">
                            {{ trans('A new verification link has been sent to your email address.') }}
                        </p>
                    @endif
                </div>
            @endif
        </div>

        <div class="flex items-center gap-4">
            <x-primary-button>{{ trans('Save') }}</x-primary-button>

            @if (session('status') === 'members-updated')
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
