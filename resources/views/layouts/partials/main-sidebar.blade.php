@php
    use App\Enums\SubsiteEnum;

    $subdomain = $subsite['subdomain'];
@endphp

<aside class="main-sidebar" id="main-sidebar">
    <h2 class="sr-only">Sidebar</h2>

    @include('layouts.partials.fund-mefi')
    @include('layouts.partials.toggle-dark-mode')

    @switch($subdomain)
        @case(SubsiteEnum::ASK->value)
            @include('layouts.partials.sidebars.ask-sidebar')
            @break
        @case(SubsiteEnum::FANFARE->value)
            @include('layouts.partials.sidebars.fanfare-sidebar')
            @break
        @case(SubsiteEnum::IRL->value)
            @include('layouts.partials.sidebars.irl-sidebar')
            @break
        @case(SubsiteEnum::JOBS->value)
            @include('layouts.partials.sidebars.jobs-sidebar')
            @break
        @case(SubsiteEnum::METATALK->value)
            @include('layouts.partials.sidebars.metatalk-sidebar')
            @break
        @case(SubsiteEnum::MUSIC->value)
            @include('layouts.partials.sidebars.music-sidebar')
            @break
        @case(SubsiteEnum::PODCAST->value)
            @include('layouts.partials.sidebars.podcast-sidebar')
            @break
        @case(SubsiteEnum::PROJECTS->value)
            @include('layouts.partials.sidebars.projects-sidebar')
            @break
        @default
            @include('layouts.partials.sidebars.default-sidebar')
    @endswitch
</aside>
