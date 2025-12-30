<?php
?>

<script>
    document.addEventListener("DOMContentLoaded", () => {
        const toggle = document.getElementById("drop-down");
        const menu = document.querySelector(".user-dropdown");

        toggle.addEventListener("click", () => {
            menu.classList.toggle("open");
        });
    });
</script>

<script>
(() => {
    const toggle = document.getElementById('theme-toggle');
    if (!toggle) return;

    const ICONS = {
        'lights-off': 'https://svgsilh.com/svg/35893.svg',
        'lights-on':  'https://www.svgrepo.com/show/117298/crescent-moon-and-star.svg'
    };

    function currentTheme() {
        return document.documentElement.dataset.theme;
    }

    function applyTheme(theme) {
        document.documentElement.dataset.theme = theme;
        toggle.src = ICONS[theme];
        toggle.title = theme === 'lights-on' ? 'Lights on' : 'Lights off';

        fetch(window.location.href, {
            method: 'POST',
            headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
            body: 'theme=' + encodeURIComponent(theme)
        });
    }

    toggle.addEventListener('click', () => {
        applyTheme(
            currentTheme() === 'lights-on'
                ? 'lights-off'
                : 'lights-on'
        );
    });
})();
</script>
