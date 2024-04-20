// Dark Mode
document.documentElement.classList.remove('no-js');
if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
    document.documentElement.classList.add('dark');
} else {
    document.documentElement.classList.remove('dark');
}

var themeToggleBtn = document.getElementById('theme-toggle');
var themeToggleDarkIcon = document.getElementById('theme-toggle-dark-icon');
var themeToggleLightIcon = document.getElementById('theme-toggle-light-icon');

// Si los elementos existen, entonces ejecuta el código
if (themeToggleBtn && themeToggleDarkIcon && themeToggleLightIcon) {
    // Cambia los iconos dentro del botón en función de la configuración anterior
    if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
        themeToggleLightIcon.classList.remove('hidden');
    } else {
        themeToggleDarkIcon.classList.remove('hidden');
    }

    themeToggleBtn.addEventListener('click', function() {
        // Alterna los iconos dentro del botón
        themeToggleDarkIcon.classList.toggle('hidden');
        themeToggleLightIcon.classList.toggle('hidden');

        // Si se estableció previamente a través del almacenamiento local
        if (localStorage.getItem('color-theme')) {
            if (localStorage.getItem('color-theme') === 'light') {
                document.documentElement.classList.add('dark');
                localStorage.setItem('color-theme', 'dark');
            } else {
                document.documentElement.classList.remove('dark');
                localStorage.setItem('color-theme', 'light');
            }

        // Si NO se estableció previamente a través del almacenamiento local
        } else {
            if (document.documentElement.classList.contains('dark')) {
                document.documentElement.classList.remove('dark');
                localStorage.setItem('color-theme', 'light');
            } else {
                document.documentElement.classList.add('dark');
                localStorage.setItem('color-theme', 'dark');
            }
        }
    });
}

// Obtén una referencia al nuevo botón y a los iconos SVG
var themeToggleBtnResponsive = document.getElementById('theme-toggle-responsive');
var themeToggleDarkIconResponsive = document.getElementById('theme-toggle-dark-icon-responsive');
var themeToggleLightIconResponsive = document.getElementById('theme-toggle-light-icon-responsive');

// Si los elementos existen, entonces ejecuta el código
if (themeToggleBtnResponsive && themeToggleDarkIconResponsive && themeToggleLightIconResponsive) {
    // Cambia los iconos dentro del botón en función de la configuración anterior
    if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
        themeToggleLightIconResponsive.classList.remove('hidden');
    } else {
        themeToggleDarkIconResponsive.classList.remove('hidden');
    }

    // Agrega un controlador de eventos al nuevo botón
    themeToggleBtnResponsive.addEventListener('click', function() {
        // Alterna los iconos dentro del botón
        themeToggleDarkIconResponsive.classList.toggle('hidden');
        themeToggleLightIconResponsive.classList.toggle('hidden');

        // Si se estableció previamente a través del almacenamiento local
        if (localStorage.getItem('color-theme')) {
            if (localStorage.getItem('color-theme') === 'light') {
                document.documentElement.classList.add('dark');
                localStorage.setItem('color-theme', 'dark');
            } else {
                document.documentElement.classList.remove('dark');
                localStorage.setItem('color-theme', 'light');
            }

        // Si NO se estableció previamente a través del almacenamiento local
        } else {
            if (document.documentElement.classList.contains('dark')) {
                document.documentElement.classList.remove('dark');
                localStorage.setItem('color-theme', 'light');
            } else {
                document.documentElement.classList.add('dark');
                localStorage.setItem('color-theme', 'dark');
            }
        }
    });
}
