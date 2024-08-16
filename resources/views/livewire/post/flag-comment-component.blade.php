<div class="flag">
    @if ($flagged === true)
        [Flagged]
    @endif

    @if ($flagged === false)
        <div class="dropdown">
            <button
                type="button"
                id="flag-dropdown-toggle"
                aria-controls="dropdown-menu"
                aria-haspopup="menu"
                aria-label="menu button"
                aria-expanded="false"
                wire:click="toggleDropdown()"
            >
                <img src="{{ asset('images/icons/flag-fill.svg') }}"
                     class="icon"
                     role="img"
                     alt="">
            </button>

            @if ($showDropdown === true)
                <ul class="dropdown-menu" role="menu">
                    <li>
                        <button
                            type="button"
                            class="dropdown-button"
                            wire:click="flag('fantastic-comment')">
                            Fantastic comment
                        </button>
                    </li>
                    <li>
                        <button
                            type="button"
                            class="dropdown-button"
                            wire:click="flag('html-display-error')">
                            HTML/display error
                        </button>
                    </li>
                    <li>
                        <button
                            type="button"
                            class="dropdown-button"
                            wire:click="flag('offensive-sexism-race')">
                            Offensive/sexism/racism
                        </button>
                    </li>
                    <li>
                        <button
                            type="button"
                            class="dropdown-button"
                            wire:click="flag('breaks-the-guidelines')">
                            Breaks the guidelines
                        </button>
                    </li>
                    <li>
                        <button
                            type="button"
                            class="dropdown-button"
                            wire:click="flag('noise-derail-other')">
                            Noise/derail/other
                        </button>
                    </li>
                    <li>
                        <button
                            class="dropdown-button"
                            id="flag-reason-toggle"
                            aria-controls="flag-reason-form"
                            aria-haspopup="menu"
                            aria-label="menu button"
                            aria-expanded="false"
                            wire:click="toggleFlagReason()"
                        >
                            Flag with note
                        </button>

                        @if ($showFlagReason === true)
                            <form
                                id="flag-reason-form"
                                aria-labelledby="flag-reason-toggle"
                            >
                                <label for="flag-reason">Flag reason:</label>
                                <textarea
                                    name="flag-reason"
                                    id="flag-reason">
                            </textarea>

                                <button
                                    type="button"
                                    wire:click="toggleFlagReason()">
                                    Cancel
                                </button>

                                <button type="submit">
                                    Add Note
                                </button>
                            </form>
                        @endif
                    </li>
                </ul>
            @endif
        </div>
    @endif
</div>
