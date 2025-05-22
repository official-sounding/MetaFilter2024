const storageKey = "theme-preference";
const colorSchemeToggle = document.getElementById("color-scheme-toggle");
const prefersDark = window.matchMedia("(prefers-color-scheme: dark)");

export function registerThemeToggle() {
    document.addEventListener("DOMContentLoaded", function () {
        function setTheme(newTheme, skipLocalStorage) {
            if (!newTheme) {
                newTheme = "light";
            }
            let pressed = newTheme === "dark" ? "true" : "false";

            colorSchemeToggle.setAttribute("aria-pressed", pressed);

            document.documentElement.setAttribute(
                "data-theme-preference",
                newTheme
            );

            if (!skipLocalStorage) {
                localStorage.setItem(storageKey, newTheme);
            }
        }

        if (localStorage.getItem(storageKey)) {
            setTheme(localStorage.getItem(storageKey));
        } else if (prefersDark.matches) {
            setTheme("dark");
        } else {
            setTheme("light");
        }

        colorSchemeToggle.addEventListener("click", function () {
            const newTheme =
                document.documentElement.getAttribute(
                    "data-theme-preference"
                ) === "dark"
                    ? "light"
                    : "dark";

            setTheme(newTheme);
        });

        prefersDark.addEventListener("change", function (event) {
            const newTheme = event.matches ? "dark" : "light";

            setTheme(newTheme);
        });

        // storage event fires when another tab/window for the same origin updates a localStorage value
        addEventListener("storage", function (event) {
            if (event.key === storageKey && event.newValue !== event.oldValue) {
                setTheme(event.newValue, true);
            }
        });
    });
}
