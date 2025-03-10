<div>
    <x-forms.label
        for="password"
        label="Password"
        :required="true"
    />

    <div class="icon-group">
        <input type="{{ $type }}" class="search-field">
        <span class="icon">
            <img
                src="{{ asset($eyeIconPath) }}"
                alt=""
                title="{{ $eyeIconTitleText }}"
                wire:click="toggleType">
        </span>
    </div>
</div>
