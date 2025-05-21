import "./bootstrap";

import Clipboard from "@ryangjchandler/alpine-clipboard";
import Precognition from "laravel-precognition-alpine";

import { toggleDropdowns } from "./modules/toggleDropdowns.js";
import { registerThemeToggle } from "./modules/toggleTheme.js";

window.Alpine = Alpine;

Alpine.plugin([Clipboard, Precognition]);

toggleDropdowns();
registerThemeToggle();

document.addEventListener("livewire:init", () => {
    Livewire.on("onkeydown", (event) => {
        if (event.key === "Escape") {
            Livewire.dispatch("escape-key-clicked", false);
        }
    });
});
