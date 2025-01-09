
<form method="post">
    @include('forms.partials.csrf-token')

    @foreach ($languages as $abbreviation => $language)
        <button
            type="submit"
            name="language"
            class="language"
            formaction="{{ route($switchLanguageRoute, ['language' => $abbreviation]) }}"
            value="{{ $abbreviation }}">
            {{ $language }}
        </button>
    @endforeach
</form>
