<a href="{{ session('profileShowRoute', ['user' => $userId]) }}"
   class="button footer-button"
   title="View {{ $username }}'s profile">
    <img src="{{ asset("images/icons/$iconFilename") }}" class="icon" alt="">
    {{ $username }}
</a>
