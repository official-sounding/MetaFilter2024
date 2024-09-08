<header class="post-header">
    <h1>{!! $post->title !!}</h1>

    <small>
        <time datetime="{{ $post->created_at->format('Y-m-d H:i:d') }}">
            @include('posts.partials.post-created-at-date')
            @include('posts.partials.post-created-at-time')
        </time>
    </small>
</header>
