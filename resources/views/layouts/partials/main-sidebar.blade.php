@php
    use App\Enums\SubsiteEnum;
@endphp

<h2 class="sr-only">
    {{ $subsiteName }} {{  trans('Sidebar') }}
</h2>

@include('layouts.partials.help-fund-mefi')
@include('layouts.sidebars.partials.appearance')

@switch($subdomain)
    @case(SubsiteEnum::Ask)
        @include('layouts.sidebars.ask-sidebar')
        @break
    @case(SubsiteEnum::FanFare)
        @include('layouts.sidebars.fanfare-sidebar')
        @break
    @case(SubsiteEnum::Irl)
        @include('layouts.sidebars.irl-sidebar')
        @break
    @case(SubsiteEnum::Jobs)
        @include('layouts.sidebars.jobs-sidebar')
        @break
    @case(SubsiteEnum::MetaTalk)
        @include('layouts.sidebars.metatalk-sidebar')
        @break
    @case(SubsiteEnum::Music)
        @include('layouts.sidebars.music-sidebar')
        @break
    @case(SubsiteEnum::Podcast)
        @include('layouts.sidebars.podcast-sidebar')
        @break
    @case(SubsiteEnum::Projects)
        @include('layouts.sidebars.projects-sidebar')
        @break
    @default
        @include('layouts.sidebars.metafilter-sidebar')
@endswitch
