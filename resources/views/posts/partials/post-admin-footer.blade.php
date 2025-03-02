<footer class="post-footer post-admin-footer">
    <button>
        <x-icons.icon-component filename="pencil-square" />
        {{ trans('Edit') }}
    </button>

    <button>
        <x-icons.icon-component filename="card-text" />
        {{ trans('Note') }}
    </button>

    {{-- MetaTalk only --}}
    <button>
        <x-icons.icon-component filename="x-square" />
        {{ trans('Close Thread') }}
    </button>

    <livewire:admin.admin-watch-component :model="$post" />
    <button>
        <x-icons.icon-component filename="eye" />
        {{ trans('Watch') }}
    </button>
</footer>
