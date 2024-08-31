<footer class="post-footer">
    @include('posts.partials.profile-link', [
        'iconFilename' => $userId === auth()->id() ? 'person-fill.svg' : 'person.svg',
    ])
    @include('posts.partials.post-created-at-time')
    @include('posts.partials.post-comments-link')
</footer>
