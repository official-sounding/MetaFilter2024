<footer class="post-footer">
    <div class="level">
        <div>
            @include('posts.partials.profile-link', [
                'userId' => $userId,
                'username' => $username,
                'iconFilename' => $userId === auth()->id() ? 'person-fill.svg' : 'person.svg',
            ])

            @include('posts.partials.post-comments-link')

            <livewire:post.favorite-post-component
                :post="$post"
                :favorites="$favoritesCount"
                :key="$post->id" />
        </div>

        @if (isset($showFlags) && $showFlags === true)
            <livewire:post.flag-post-component
                :post="$post"
                :flags="$flagsCount"
                :key="$post->id" />

            @if (isset($showFlagPostForm) && $showFlagPostForm === true)
                <livewire:post.flag-post-form-component
                    :post="$post"
                    :flagReasons="$flagReasons"
                    :key="$post->id" />
            @endif
        @endif
    </div>
</footer>
