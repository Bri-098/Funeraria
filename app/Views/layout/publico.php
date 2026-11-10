<?php
// Layout público: lo heredan todas las vistas con $this->extend('layout/publico').
// Variables que manda el Controller: $titulo, $heroTitulo y (opcional) $heroGrande.
$telefono = env('contacto.telefono');
$whatsapp = env('contacto.whatsapp');
$paginaActual = uri_string(); // para marcar el enlace activo del menú
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= esc($titulo ?? 'Funeraria') ?> | Funeraria</title>
    <meta name="description" content="Funeraria con atención las 24 horas. Servicios de velación, cremación, inhumación y previsión.">
    <link rel="stylesheet" href="<?= base_url('css/estilos.css') ?>">
    <script src="<?= base_url('js/sitio.js') ?>" defer></script>
</head>
<body>

<a class="salto" href="#contenido">Saltar al contenido</a>

<!-- ========== MENÚ ========== -->
<header class="menu">
    <div class="menu__barra">
        <a class="menu__logo" href="<?= base_url('/') ?>">Funeraria</a>

        <!-- Botón hamburguesa: solo se ve en celular -->
        <button class="menu__boton" type="button" aria-expanded="false" aria-controls="menu-enlaces" aria-label="Abrir menú">
            <span></span><span></span><span></span>
        </button>

        <nav id="menu-enlaces" class="menu__enlaces" aria-label="Menú principal">
            <a href="<?= base_url('contacto') ?>"  <?= $paginaActual === 'contacto'  ? 'aria-current="page"' : '' ?>>Contacto</a>
            <a href="<?= base_url('nosotros') ?>"  <?= $paginaActual === 'nosotros'  ? 'aria-current="page"' : '' ?>>Nosotros</a>
            <a href="<?= base_url('servicios') ?>" <?= $paginaActual === 'servicios' ? 'aria-current="page"' : '' ?>>Servicios</a>
        </nav>
    </div>
</header>

<!-- ========== ENCABEZADO (hero) ========== -->
<section class="hero <?= ! empty($heroGrande) ? 'hero--inicio' : '' ?>">
    <h1><?= esc($heroTitulo ?? 'Funeraria') ?></h1>
    <p class="hero__sub">Atención las 24 horas</p>
    <a class="boton boton--claro" href="<?= base_url('contacto') ?>">Solicitar información</a>
</section>

<!-- ========== CONTENIDO DE CADA PÁGINA ========== -->
<main id="contenido">
    <?= $this->renderSection('content') ?>
</main>

<!-- ========== PIE OSCURO ========== -->
<footer class="pie <?= ! empty($pieCruce) ? 'pie--cruce' : '' ?>">
    <?= $this->renderSection('pie_intro') ?>

    <p class="pie__texto">
        Nuestro equipo está disponible las 24 horas para una atención inmediata. No dudes en contactarnos para agendar tu cotización lo más pronto posible.
        <em>“Porque recordar con amor también es sanar”</em>
    </p>

    <a class="boton boton--oscuro boton--grande" href="tel:<?= esc($telefono, 'url') ?>">Atención inmediata</a>
</footer>

<!-- ========== BOTONES FIJOS: llamada y WhatsApp (RF-03) ========== -->
<div class="fijos">
    <a class="fijo fijo--llamar" href="tel:<?= esc($telefono, 'url') ?>" aria-label="Llamar por teléfono">
        <svg viewBox="0 0 24 24" aria-hidden="true"><path fill="currentColor" d="M6.6 10.8a15.1 15.1 0 0 0 6.6 6.6l2.2-2.2a1 1 0 0 1 1-.25 11.4 11.4 0 0 0 3.6.57 1 1 0 0 1 1 1V20a1 1 0 0 1-1 1A17 17 0 0 1 3 4a1 1 0 0 1 1-1h3.5a1 1 0 0 1 1 1c0 1.25.2 2.45.57 3.57a1 1 0 0 1-.25 1z"/></svg>
    </a>
    <a class="fijo fijo--whatsapp" href="https://wa.me/<?= esc($whatsapp, 'url') ?>" target="_blank" rel="noopener" aria-label="Escribir por WhatsApp">
        <svg viewBox="0 0 32 32" aria-hidden="true"><path fill="currentColor" d="M16 3a13 13 0 0 0-11.1 19.7L3 29l6.5-1.7A13 13 0 1 0 16 3zm0 23.7a10.6 10.6 0 0 1-5.4-1.5l-.4-.2-3.8 1 1-3.7-.3-.4A10.7 10.7 0 1 1 16 26.700zm5.900-8c-.3-.2-1.900-.9-2.200-1s-.5-.2-.7.2-.8 1-1 1.200-.4.2-.7.1a8.700 8.700 0 0 1-4.300-3.800c-.3-.6.300-.5.900-1.700a.6.600 0 0 0 0-.6l-1-2.300c-.2-.6-.5-.5-.7-.5h-.6a1.200 1.200 0 0 0-.9.4 3.700 3.700 0 0 0-1.100 2.700 6.400 6.400 0 0 0 1.300 3.400 14.700 14.700 0 0 0 5.600 4.900c2.100.9 2.900 1 3.900.8a3.300 3.300 0 0 0 2.200-1.500 2.700 2.700 0 0 0 .2-1.500c-.1-.1-.3-.2-.6-.4z"/></svg>
    </a>
</div>

</body>
</html>
