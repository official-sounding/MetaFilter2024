<section class="posts">
    @foreach ($this->data() as $post)
        <livewire:posts.post-index-item-component :post="$post" :key="$post->id" />
    @endforeach
</section>
