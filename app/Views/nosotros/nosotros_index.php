<?= $this->extend('layout/publico') ?>

<?= $this->section('content') ?>

<div class="franja franja--sube">
    <section class="tarjeta tarjeta--nosotros" aria-labelledby="t-nosotros">
        <h2 id="t-nosotros">Sobre Nosotros</h2>
        <div class="nosotros">
            <div class="nosotros__foto foto foto--vela2" role="img" aria-label="Una vela encendida en la oscuridad"></div>
            <p>
                Entendemos que despedir a un ser querido es uno de los momentos más dolorosos y retadores de la vida.
                Nuestra misión ha sido brindar un espacio de paz, apoyo incondicional y acompañamiento profesional para las familias.
                Nos encargamos de cada detalle logístico y humano con la dignidad y el respeto que tu familia merece,
                permitiéndote enfocar tu energía en lo más importante: honrar la memoria de quien partió.
            </p>
        </div>
    </section>
</div>

<?= $this->endSection() ?>

<?= $this->section('pie_intro') ?>
    <h2 class="pie__titulo" id="privacidad">Aviso de Privacidad</h2>
    <p class="pie__texto">
        Funeraria S.A. de C.V. recopila sus datos (nombre, contacto, facturación e información para esquelas) únicamente para cotizar, gestionar y prestar servicios funerarios, tramitar pagos y responder a sus mensajes.
        Sus datos están protegidos y no se comparten con terceros. Puede ejercer sus derechos de acceso, corrección o eliminación escribiendo a privacidad@funeraria.com.mx.
    </p>
<?= $this->endSection() ?>
