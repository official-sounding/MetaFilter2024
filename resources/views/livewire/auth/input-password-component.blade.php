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
            aria-pressed="{{ $pressed }}">
            <img
                src="{{ asset($eyeIconPath) }}"
                alt=""
                title="{{ trans('Toggle password visibility') }}"
                wire:click="togglePassword">
        </button>
    </div>
</div>
