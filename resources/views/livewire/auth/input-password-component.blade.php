<div>
    <x-forms.label
        for="password"
        label="Password"
        :required="true"
    />

    <div class="icon-group">
        <input type="{{ $type }}" class="search-field" name="password" id="password" wire:model="password" required>
        <span class="icon">
            <img
                src="{{ asset($eyeIconPath) }}"
                alt=""
                title="{{ $eyeIconTitleText }}"
                wire:click="toggleType">
        </span>
    </div>
</div>
