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
        <span class="icon">
            <img
                src="{{ asset($eyeIconPath) }}"
                alt=""
                title="{{ $eyeIconTitleText }}"
                wire:click="togglePassword">
        </span>
    </div>
</div>
