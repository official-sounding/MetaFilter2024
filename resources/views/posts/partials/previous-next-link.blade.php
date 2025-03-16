<a class="{{ mb_strtolower($direction) }}"
   title="{{ trans($direction) }} {{ trans('post') }}"
   href="{{ route($routeName, [
        'post' => $post,
        'slug' => $post->slug
   ]) }}">
    {{ trans($direction) }}
    <span class="title">
        @if ($direction === 'Previous')
            <x-icons.icon-component filename="chevron-left" />
        @endif

        {{ $post->title }}

        @if ($direction === 'Next')
            <x-icons.icon-component filename="chevron-right" />
        @endif
    </span>
</a>
