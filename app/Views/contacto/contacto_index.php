<?= $this->extend('layout/publico') ?>

<?= $this->section('content') ?>

<!-- Banda que va de lila a oscuro, igual que en el inicio -->
<div class="banda-contacto banda-contacto--sube">
    <section class="tarjeta tarjeta--formulario">
        <?= $this->include('partials/form_contacto') ?>
        <div class="tarjeta__foto foto foto--vela" role="img" aria-label="Una rosa blanca junto a una vela encendida"></div>
    </section>
</div>

<?= $this->endSection() ?>
