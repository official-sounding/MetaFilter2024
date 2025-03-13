<div class="notification is-info">
    <p>
        <x-icons.icon-component filename="exclamation-triangle-fill" />

        You aren&rsquo;t logged in.
        @switch($context)
            @case('comment')
                {{-- TODO: Localize text --}}
                <a href="{{ route('login') }}">Log in</a> or
                <a href="{{ route('signup') }}">sign up</a> to add comments.
                @break
            @case('index')
                Please <a href="{{ route('signup') }}">sign up</a> to add posts and comments,
                or <a href="{{ route('login') }}">log in</a> if you&rsquo;re already a member.
        @endswitch
    </p>
</div>
