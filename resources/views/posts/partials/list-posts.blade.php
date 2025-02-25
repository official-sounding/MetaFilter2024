@foreach ($posts as $post)
    <article class="post" wire:key="post-{{ $post->id }}">
        @include('posts.partials.post-header', [
        ])

        {{ $post->body }}

        @include('posts.partials.post-index-footer', [
            'post' => $post,
            'user' => $post->user,
            'username' => $post->user->username,
            'userId' => $post->user->id,
            'commentsCount' => $post->comments()->count(),
        ])
    </article>
@endforeach
