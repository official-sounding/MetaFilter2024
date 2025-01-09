<section>
    <h2>{{ trans('Comments') }} ({{ $this->commentsCount }})</h2>

    @forelse ($comments as $comment)
        <livewire:comments.comment-component :comment="$comment" :key="$comment->id" />
    @empty
        No comments
    @endforelse

    @if (isset($isArchived) && $isArchived === true)
        @include('posts.partials.show-archived')
    @endif
</section>
