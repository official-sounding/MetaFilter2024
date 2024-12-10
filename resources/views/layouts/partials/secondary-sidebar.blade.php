@php
    use App\Enums\SubsiteEnum;

    $subdomain = $subsite['subdomain'];
@endphp

<h2 class="sr-only">{{  __('Sidebar') }}</h2>

@include('layouts.partials.fund-mefi')

<details>
    <summary>
        <h3>{{  __('Appearance') }}</h3>
    </summary>

    @include('layouts.partials.toggle-dark-mode')
</details>

@switch($subdomain)
    @case(SubsiteEnum::Ask->value)
        @include('layouts.partials.sidebars.ask-sidebar')
        @break
    @case(SubsiteEnum::FanFare->value)
        @include('layouts.partials.sidebars.fanfare-sidebar')
        @break
    @case(SubsiteEnum::Irl->value)
        @include('layouts.partials.sidebars.irl-sidebar')
        @break
    @case(SubsiteEnum::Jobs->value)
        @include('layouts.partials.sidebars.jobs-sidebar')
        @break
    @case(SubsiteEnum::MetaTalk->value)
        @include('layouts.partials.sidebars.metatalk-sidebar')
        @break
    @case(SubsiteEnum::Music->value)
        @include('layouts.partials.sidebars.music-sidebar')
        @break
    @case(SubsiteEnum::Podcast->value)
        @include('layouts.partials.sidebars.podcast-sidebar')
        @break
    @case(SubsiteEnum::Projects->value)
        @include('layouts.partials.sidebars.projects-sidebar')
        @break
    @default
        @include('layouts.partials.sidebars.default-sidebar')
@endswitch
