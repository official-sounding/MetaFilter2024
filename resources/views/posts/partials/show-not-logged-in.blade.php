<div class="notification is-info">
    <p>
        You aren&rsquo;t logged in.
        @switch($context)
            @case('comment')
                {{-- TODO: Localize text --}}
                <a href="{{ route($loginCreateRoute) }}">Log in</a> or
                <a href="{{ route($registerCreateRoute) }}">register</a> to add comments.
                @break
            @case('index')
                Please <a href="{{ route($registerCreateRoute) }}">register</a> to add posts or comments,
                or <a href="{{ route($loginCreateRoute) }}">log in</a> if you&rsquo;re already a member.
        @endswitch
    </p>
</div>
