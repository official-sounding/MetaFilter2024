<section>
    <h2>{{ trans('Related Posts') }}</h2>

    @forelse ($relatedPosts as $post)
        {{ $post->title }}<br>
    @empty
        <x-notifications.none-listed-component items='posts' />
    @endforelse
</section>
