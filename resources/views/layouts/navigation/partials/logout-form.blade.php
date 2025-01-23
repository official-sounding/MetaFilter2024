<x-forms.form
    :action="{{ $logoutRoute }}"
    :class="'logout-form'"
    :showRequiredFieldsNote="false">
    <button type="submit" class="logout-button">
        <span class="icon">
            <img src="{{ asset('images/icons/box-arrow-right.svg') }}" alt="">
        </span>
        {{ trans('Log Out') }}
    </button>
</x-forms.form>
