@php
    $currentDate = $posts->first()->created_at->format('F j');
@endphp

@foreach ($posts as $post)
    @if ($loop->first)
        <h2>{{ $currentDate }}</h2>
    @endif

    @if ($currentDate !== $post->created_at->format('F j, Y'))
        <h2>{{ $currentDate }}</h2>
    @endif

    <article class="post" wire:key="post-{{ $post->id }}">
        <header>
            <h3>
                <a href="{{ route("$subdomain.post.show", [
                    'post' => $post,
                    'slug' => $post->slug
                ]) }}">
                    {{ $post->title }}
                </a>
            </h3>
        </header>

        {{ $post->body }}

        @include('posts.partials.post-footer', [
            'userId' => $post->user_id,
            'username' => $post->username,
        ])
    </article>
@endforeach
