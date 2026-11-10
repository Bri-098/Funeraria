// JavaScript sencillo del sitio: menú desplegable (celular) y carrusel de servicios.

// ---------- Menú desplegable ----------
var botonMenu = document.querySelector('.menu__boton');
var enlaces = document.getElementById('menu-enlaces');

if (botonMenu && enlaces) {
    botonMenu.addEventListener('click', function () {
        var abierto = enlaces.classList.toggle('menu__enlaces--abierto');
        botonMenu.setAttribute('aria-expanded', abierto);
        botonMenu.setAttribute('aria-label', abierto ? 'Cerrar menú' : 'Abrir menú');
    });
}

// ---------- Carrusel de servicios ----------
var carrusel = document.querySelector('[data-carrusel]');

if (carrusel) {
    var slides = carrusel.querySelectorAll('[data-slide]');
    var puntos = carrusel.querySelectorAll('[data-punto]');
    var actual = 0;

    // Muestra el slide número "n" y oculta los demás
    function mostrar(n) {
        actual = (n + slides.length) % slides.length; // da la vuelta al llegar al final
        for (var i = 0; i < slides.length; i++) {
            slides[i].hidden = (i !== actual);
            if (i === actual) {
                puntos[i].setAttribute('aria-current', 'true');
            } else {
                puntos[i].removeAttribute('aria-current');
            }
        }
    }

    carrusel.querySelector('[data-ant]').addEventListener('click', function () { mostrar(actual - 1); });
    carrusel.querySelector('[data-sig]').addEventListener('click', function () { mostrar(actual + 1); });

    for (var p = 0; p < puntos.length; p++) {
        (function (indice) {
            puntos[indice].addEventListener('click', function () { mostrar(indice); });
        })(p);
    }
}
