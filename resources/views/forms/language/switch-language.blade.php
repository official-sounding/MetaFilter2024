
<form method="post">
    @csrf

    {{-- // TODO: Get actual languages --}}
    @foreach ($languages as $language)
        <button
            type="submit"
            name="language"
            {{-- // TODO: Get actual route --}}
            formaction="/SWITCH_LANGUAGE/{{ $language }}"
            value="{{ $language }}">
            {{ $language }}
        </button>
    @endforeach
</form>
