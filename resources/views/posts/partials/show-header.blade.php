<header class="post-header">
    <h1>{!! $post->title !!}</h1>

    <small>
        <time datetime="{{ $post->created_at->format('Y-m-d H:i:d') }}">
            {{ $post->created_at->format('F j Y, g:i a') }}
        </time>
    </small>
</header>
