<a href="{{ route($profileRoute, [
            'user' => $userId
        ]) }}"
   class="footer-button"
   title="View {{ $username }}'s profile">
    {{-- TODO: Use filled icon if this is the current user --}}
    <img src="{{ asset("images/icons/$iconFilename") }}" class="icon" role="img" alt="">
    {{ $username }}
</a>
