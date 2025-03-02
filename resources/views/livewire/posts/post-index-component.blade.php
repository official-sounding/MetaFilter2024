<section class="posts">
    @php
        $previousMonthDay = null;
    @endphp

    @foreach ($posts as $post)
        @if ($previousMonthDay !== $post->month_day)
            <h2>{{ \Carbon\Carbon::createFromFormat('m-d', $post->month_day)->format('F j') }}</h2>
            @php
                $previousMonthDay = $post->month_day;
            @endphp
        @endif

        <livewire:posts.post-index-item-component :post="$post" :key="$post->id" />
    @endforeach

    {{ $posts->links() }}
</section>
