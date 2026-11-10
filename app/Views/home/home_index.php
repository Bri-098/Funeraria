<?= $this->extend('layout/publico') ?>

<?= $this->section('content') ?>

<div class="franja">

    <!-- Resumen de servicios -->
    <section class="tarjeta tarjeta--servicios" aria-labelledby="t-servicios">
        <h2 id="t-servicios">Tenemos diferentes servicios para acompañarte</h2>
        <ul class="iconos">
            <li>
                <svg viewBox="0 0 48 64" aria-hidden="true"><path fill="none" stroke="currentColor" stroke-width="3" stroke-linejoin="round" d="M16 4h16l10 18-6 38H12L6 22zM24 16v24M17 24h14"/></svg>
                Velación
            </li>
            <li>
                <svg viewBox="0 0 48 64" aria-hidden="true"><path fill="currentColor" d="M20 4h12v6H20zM16 12h20c6 4 10 12 10 22 0 14-8 24-20 24S6 48 6 34c0-10 4-18 10-22z"/></svg>
                Cremación
            </li>
            <li>
                <svg viewBox="0 0 48 64" aria-hidden="true"><path fill="currentColor" d="M20 4h8v8h8v6h-8v6h-8v-6h-8v-6h8zM12 30h24l4 12v16H8V42z"/></svg>
                Inhumación
            </li>
            <li>
                <svg viewBox="0 0 48 64" aria-hidden="true"><path fill="none" stroke="currentColor" stroke-width="3" stroke-linejoin="round" d="M10 6h28v38H10zM16 16h16M16 24h16M16 32h10"/><circle cx="34" cy="48" r="10" fill="none" stroke="currentColor" stroke-width="3"/></svg>
                Previsión
            </li>
        </ul>
        <a class="boton boton--oscuro boton--sobre" href="<?= base_url('servicios') ?>">Ver nuestros servicios</a>
    </section>

    <!-- Invitación a Nosotros -->
    <section class="banner" aria-label="Sobre nosotros">
        <div class="banner__imagen foto foto--lapida" role="img" aria-label="Una rosa roja sobre una lápida de piedra"></div>
        <div class="banner__texto">
            <p>Te invitamos a leer más sobre nosotros para acompañarte de la manera que mereces</p>
            <a class="boton boton--blanco" href="<?= base_url('nosotros') ?>">Conoce más sobre nosotros</a>
        </div>
    </section>

</div>

<!-- Formulario (la banda cambia de lila a oscuro, como en el diseño) -->
<div class="banda-contacto">
    <section class="tarjeta tarjeta--formulario">
        <?= $this->include('partials/form_contacto') ?>
        <div class="tarjeta__foto foto foto--vela" role="img" aria-label="Una rosa blanca junto a una vela encendida"></div>
    </section>
</div>

<?= $this->endSection() ?>
