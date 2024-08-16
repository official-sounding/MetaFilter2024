<a href="{{ route($profileRoute, [
            'user' => $userId
        ]) }}"
   title="View {{ $username }}'s profile">
    {{-- TODO: Use filled icon if this is the current user --}}
    <img src="{{ asset('images/icons/person.svg') }}" class="icon" role="img" alt="">
    {{ $username }}
</a>
