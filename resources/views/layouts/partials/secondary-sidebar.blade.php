@php
    use App\Enums\SubsiteEnum;

    $subdomain = $subsite['subdomain'];
@endphp

<h2 class="sr-only">{{  trans('Sidebar') }}</h2>

@include('layouts.partials.help-fund-mefi')

<section>
</section>

@switch($subdomain)
    @case(SubsiteEnum::Ask->value)
        @include('layouts.sidebars.ask-sidebar')
        @break
    @case(SubsiteEnum::FanFare->value)
        @include('layouts.sidebars.fanfare-sidebar')
        @break
    @case(SubsiteEnum::Irl->value)
        @include('layouts.sidebars.irl-sidebar')
        @break
    @case(SubsiteEnum::Jobs->value)
        @include('layouts.sidebars.jobs-sidebar')
        @break
    @case(SubsiteEnum::MetaTalk->value)
        @include('layouts.sidebars.metatalk-sidebar')
        @break
    @case(SubsiteEnum::Music->value)
        @include('layouts.sidebars.music-sidebar')
        @break
    @case(SubsiteEnum::Podcast->value)
        @include('layouts.sidebars.podcast-sidebar')
        @break
    @case(SubsiteEnum::Projects->value)
        @include('layouts.sidebars.projects-sidebar')
        @break
    @default
        @include('layouts.sidebars.metafilter-sidebar')
@endswitch
