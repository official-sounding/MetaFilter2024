<section>
    <h2>{{ trans('Related Posts') }}</h2>

    @forelse ($relatedPosts as $post)
        {{ $post->title }}<br>
    @empty
        @include('notifications.none-listed', [
            'records' => 'related posts'
        ])
    @endforelse
</section>
