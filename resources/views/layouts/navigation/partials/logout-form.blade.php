<form
    action="{{ $logoutRoute }}"
    class="logout-form"
    method="POST"
>
    @include('forms.partials.csrf-token')

    <button type="submit" class="logout-button">
        <span class="icon">
            <img src="{{ asset('images/icons/box-arrow-right.svg') }}" alt="">
        </span>
        {{ trans('Log Out') }}
    </button>
</form>
