<div class="notification is-info">
    <p>
        You aren&rsquo;t logged in.
        @switch($context)
            @case('comment')
                {{-- TODO: Localize text --}}
                <a href="{{ session('loginCreateRoute') }}">Log in</a> or
                <a href="{{ session('registerCreateRoute') }}">sign up</a> to add comments.
                @break
            @case('index')
                Please <a href="{{ session('registerCreateRoute') }}">sign up</a> to add posts and comments,
                or <a href="{{ session('loginCreateRoute') }}">log in</a> if you&rsquo;re already a member.
        @endswitch
    </p>
</div>
