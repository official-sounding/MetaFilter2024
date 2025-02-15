<a class="button"
   href="{{ route($memberShowRoute, ['user' => $userId]) }}"
   title="View {{ $username }}'s profile">
    <x-icons.icon-component filename="person" />
    {{ $username }}
</a>
