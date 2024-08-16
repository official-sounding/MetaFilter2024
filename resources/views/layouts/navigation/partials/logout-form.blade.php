<x-forms.form
    action="{{ route($logoutRoute) }}"
    class="logout-form"
    showRequiredFieldsNote="false">
    <button type="submit" class="logout-button">
        <img src="{{ asset('images/icons/box-arrow-right.svg') }}" class="icon" role="img" alt="">
        Log Out
    </button>
</x-forms.form>
