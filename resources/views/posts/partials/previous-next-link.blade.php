<a class="{{ mb_strtolower($direction) }}"
   title="{{ trans($direction) }} {{ trans('post') }}"
   href="{{ route($routeName, [
        'post' => $post,
        'slug' => $post->slug
   ]) }}">
    {{ trans($direction) }}
    <span class="title">
        {{ $post->title }}
    </span>
</a>
