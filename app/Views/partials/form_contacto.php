<?php
// Formulario de contacto (se usa en Inicio y en Contacto).
// Los errores y el mensaje de éxito llegan por la sesión desde ContactoController::store.
$errores = session()->getFlashdata('errores') ?? [];
$exito   = session()->getFlashdata('exito');
?>
<div class="formulario" id="formulario">
    <h2>Contáctanos</h2>

    <?php if ($exito): ?>
        <p class="alerta alerta--exito" role="status"><?= esc($exito) ?></p>
    <?php endif; ?>

    <?php if ($errores): ?>
        <p class="alerta alerta--error" role="alert">Revisa los campos marcados e inténtalo de nuevo.</p>
    <?php endif; ?>

    <form action="<?= base_url('contacto/enviar') ?>" method="post" novalidate>
        <?= csrf_field() ?>

        <div class="campo">
            <label for="nombre">Nombre completo*</label>
            <input type="text" id="nombre" name="nombre" value="<?= esc(old('nombre')) ?>" maxlength="100" required autocomplete="name"
                   <?= isset($errores['nombre']) ? 'aria-invalid="true" aria-describedby="error-nombre"' : '' ?>>
            <?php if (isset($errores['nombre'])): ?><p class="campo__error" id="error-nombre"><?= esc($errores['nombre']) ?></p><?php endif; ?>
        </div>

        <div class="campo">
            <label for="correo">Email*</label>
            <input type="email" id="correo" name="correo" value="<?= esc(old('correo')) ?>" maxlength="150" required autocomplete="email"
                   <?= isset($errores['correo']) ? 'aria-invalid="true" aria-describedby="error-correo"' : '' ?>>
            <?php if (isset($errores['correo'])): ?><p class="campo__error" id="error-correo"><?= esc($errores['correo']) ?></p><?php endif; ?>
        </div>

        <div class="campo">
            <label for="telefono">Teléfono*</label>
            <input type="tel" id="telefono" name="telefono" value="<?= esc(old('telefono')) ?>" maxlength="20" required autocomplete="tel"
                   <?= isset($errores['telefono']) ? 'aria-invalid="true" aria-describedby="error-telefono"' : '' ?>>
            <?php if (isset($errores['telefono'])): ?><p class="campo__error" id="error-telefono"><?= esc($errores['telefono']) ?></p><?php endif; ?>
        </div>

        <div class="campo">
            <label for="mensaje">Mensaje*</label>
            <textarea id="mensaje" name="mensaje" rows="4" maxlength="1000" required
                      <?= isset($errores['mensaje']) ? 'aria-invalid="true" aria-describedby="error-mensaje"' : '' ?>><?= esc(old('mensaje')) ?></textarea>
            <?php if (isset($errores['mensaje'])): ?><p class="campo__error" id="error-mensaje"><?= esc($errores['mensaje']) ?></p><?php endif; ?>
        </div>

        <p class="formulario__privacidad">Tus datos son confidenciales. Consulta el <a href="<?= base_url('nosotros#privacidad') ?>">aviso de privacidad</a>.</p>

        <button class="boton boton--oscuro" type="submit">
            Enviar Mensaje
            <svg viewBox="0 0 24 24" aria-hidden="true"><path fill="none" stroke="currentColor" stroke-width="1.8" stroke-linejoin="round" d="M21 3 3 10.5l6.5 2.5L12 20l2.500-5.500zM9.500 13 21 3"/></svg>
        </button>
    </form>
</div>
