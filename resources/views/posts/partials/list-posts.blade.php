@foreach ($posts as $post)
    <livewire:posts.post-index-item-component :post="$post" :key="$post->id" />
@endforeach
