<div>
    <x-forms.label
        for="{{ $name }}"
        label="{{ $label ?? ucfirst($name) }}"
        :required="true"
    />

    <div class="icon-group">
        <input
            type="{{ $type }}"
            name="{{ $name }}"
            id="{{ $name }}"
            wire:model="password"
            required
        >
        <button
            class="icon"
            role="switch"
            aria-checked="{{ $pressed ? "true" : "false" }}"
            wire:click="togglePassword">
            <span aria-hidden="true">Toggle password visibility</span>
            <img
                src="{{ asset($eyeIconPath) }}"
                alt=""
                title="{{ trans('Toggle password visibility') }}"
                >
        </button>
    </div>
</div>
