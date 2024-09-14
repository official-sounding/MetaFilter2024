<a href="{{ route($profileRoute, [
            'user' => $userId
        ]) }}"
   class="button footer-button"
   title="View {{ $username }}'s profile">
    <img src="{{ asset("images/icons/$iconFilename") }}" class="icon" role="img" alt="">
    {{ $username }}
</a>
