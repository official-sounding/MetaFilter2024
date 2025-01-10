@foreach ($dayPosts as $date => $posts)
    <h2>{{ $date }}</h2>

    @include('posts.partials.list-posts', [
        'posts' => $posts
    ])
@endforeach
