window.addEventListener("load", (event) => {
    if (document.documentElement.getAttribute('data-bs-theme') == 'dark') {
        document.getElementById('bg-theme-text').innerText = "Modo claro";
        document.getElementById('button-switch-theme').title = "Modo claro";
        document.getElementById('bg-theme').className = "fa fa-sun";
    } else {
        document.getElementById('bg-theme-text').innerText = "Modo oscuro";
        document.getElementById('button-switch-theme').title = "Modo oscuro";
        document.getElementById('bg-theme').className = "fa fa-moon";
    }
});

document.addEventListener('DOMContentLoaded', () => {
    const htmlElement = document.documentElement;
    const buttonSwitch = document.getElementById('button-switch-theme');

    function getPreferredTheme() {
        const currentTheme = localStorage.getItem('theme');
        if (currentTheme !== null) {
            return currentTheme;
        }
        return window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light'
    }

    htmlElement.setAttribute('data-bs-theme', getPreferredTheme());
    buttonSwitch.addEventListener('click', function () {
	 document.querySelector('body').classList.add('mode-switch');
        if (document.documentElement.getAttribute('data-bs-theme') == 'dark') {
            document.documentElement.setAttribute('data-bs-theme', 'light');
            document.getElementById('bg-theme-text').innerText = "Modo oscuro";
            document.getElementById('button-switch-theme').title = "Modo oscuro";
            document.getElementById('bg-theme').className = "fa fa-moon";
            localStorage.setItem('theme', 'light');
        } else {
            document.documentElement.setAttribute('data-bs-theme', 'dark')
            document.getElementById('bg-theme-text').innerText = "Modo claro";
            document.getElementById('button-switch-theme').title = "Modo claro";
            document.getElementById('bg-theme').className = "fa fa-sun";
            localStorage.setItem('theme', 'dark');
        }
    });
});