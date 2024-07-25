@foreach ($posts as $date => $datePosts)
    <h3>{{ $date }}</h3>

    <div class="posts">
        @foreach ($datePosts as $post)
            <article class="post">
                <header>
                    <h3>
                        <a href="{{ $post->id }}">
                            {{ $post->title }}
                        </a>
                    </h3>
                </header>

                {{ $post->body }}

                @include('posts.partials.index-footer', [
                    'username' => $post->username
                ])
            </article>
        @endforeach
    </div>
@endforeach
