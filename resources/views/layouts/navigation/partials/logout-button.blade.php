<x-forms.form
    action="{{ route($logoutRoute) }}"
    class="logout-form"
    showRequiredFieldsNote="false">
    <button type="submit" class="logout-button">
        <span class="icon-logout">
            Log Out
        </span>
    </button>
</x-forms.form>
