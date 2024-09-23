<footer class="post-footer">
    @include('posts.partials.profile-link', [
        'userId' => $userId,
        'username' => $username,
        'iconFilename' => $userId === auth()->id() ? 'person-fill.svg' : 'person.svg',
    ])

    @include('posts.partials.post-comments-link')

    <livewire:post.favorite-post-component :post="$post" :key="$post->id" />
    <livewire:post.flag-post-component :post="$post" :key="$post->id" />
</footer>
