<x-forms.form
    action="{{ session('logoutRoute') }}"
    class="logout-form"
    showRequiredFieldsNote="false">
    <button type="submit" class="logout-button">
        <img src="{{ asset('images/icons/box-arrow-right.svg') }}" class="icon" alt="">
        {{ __('Log Out') }}
    </button>
</x-forms.form>
