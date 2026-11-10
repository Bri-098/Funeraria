<?= $this->extend('layout/publico') ?>

<?= $this->section('content') ?>

<div class="franja franja--sube">
    <section class="tarjeta tarjeta--carrusel" aria-labelledby="t-carrusel">
        <h2 id="t-carrusel">Nuestros Servicios</h2>

        <!-- Carrusel: la lógica está en public/js/sitio.js -->
        <div class="carrusel" data-carrusel>
            <button class="carrusel__flecha carrusel__flecha--ant" type="button" data-ant aria-label="Servicio anterior">
                <svg viewBox="0 0 24 24" aria-hidden="true"><path fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" d="M15 4 7 12l8 8"/></svg>
            </button>

            <div class="carrusel__pistas">
                <?php foreach ($servicios as $i => $servicio): ?>
                    <article class="servicio" data-slide <?= $i === 0 ? '' : 'hidden' ?>>
                        <div class="servicio__foto foto foto--<?= esc($servicio['imagen'], 'attr') ?>" role="img" aria-label="Imagen del servicio de <?= esc($servicio['nombre'], 'attr') ?>"></div>
                        <div class="servicio__texto">
                            <h3><?= esc($servicio['nombre']) ?></h3>
                            <p><?= esc($servicio['descripcion']) ?></p>
                        </div>
                    </article>
                <?php endforeach; ?>
            </div>

            <button class="carrusel__flecha carrusel__flecha--sig" type="button" data-sig aria-label="Servicio siguiente">
                <svg viewBox="0 0 24 24" aria-hidden="true"><path fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" d="m9 4 8 8-8 8"/></svg>
            </button>

            <div class="carrusel__puntos">
                <?php foreach ($servicios as $i => $servicio): ?>
                    <button type="button" data-punto aria-label="Ver <?= esc($servicio['nombre'], 'attr') ?>" <?= $i === 0 ? 'aria-current="true"' : '' ?>></button>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
</div>

<?= $this->endSection() ?>

<?= $this->section('pie_intro') ?>
    <h2 class="pie__titulo">Contáctanos</h2>
<?= $this->endSection() ?>
