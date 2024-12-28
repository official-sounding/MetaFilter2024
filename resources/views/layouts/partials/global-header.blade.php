<section class="navbar global-header">
    <div class="container level">
        @include('layouts.navigation.partials.dropdown-toggle', [
            'id' => 'global-navigation-toggle',
            'ariaControls' => 'global-navigation',
            'ariaLabel' => 'MetaFilter sites',
            'title' => 'MetaFilter sites',
            'icon' => 'list'
        ])

        @include('layouts.partials.site-title')

        @include('layouts.navigation.partials.dropdown-toggle', [
            'id' => 'utility-navigation-toggle',
            'ariaControls' => 'utility-navigation',
            'ariaLabel' => 'Utility navigation',
            'title' => null,
            'icon' => 'person-fill'
        ])

        @include('layouts.navigation.utility-navigation')
    </div>
</section>
