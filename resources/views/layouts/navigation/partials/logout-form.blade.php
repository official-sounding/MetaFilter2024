<x-forms.form
    action="{{ session('logoutRoute') }}"
    class="logout-form"
    showRequiredFieldsNote="false">
    <button type="submit" class="logout-button">
        <span class="icon">
            <img src="{{ asset('images/icons/box-arrow-right.svg') }}" alt="">
        </span>
        {{ __('Log Out') }}
    </button>
</x-forms.form>
