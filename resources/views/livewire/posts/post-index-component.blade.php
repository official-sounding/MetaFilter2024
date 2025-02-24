<section class="posts">
    @include('posts.partials.list-posts', [
        'posts' => $this->data()
    ])
</section>
