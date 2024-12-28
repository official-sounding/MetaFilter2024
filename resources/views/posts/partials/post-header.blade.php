<header class="post-header">
    <h3>
        <a href="{{ route("$subdomain.post.show", [
                    'post' => $post,
                    'slug' => $post->slug
                ]) }}">
            {{ $post->title }}
        </a>
    </h3>
</header>
