<div class="container mt-5">
    <div class="row justify-content-md-center">
        <div class="col-5">

            <?php if (session()->getFlashdata('msg')) : ?>
                <div class="alert alert-warning">
                    <?= session()->getFlashdata('msg') ?>
                </div>
            <?php endif; ?>

            <?php if (session()->perfil_id == 1) : ?>
                <div>
                    <h3>Este es el espacio del administrador</h3>
                    
                   <a href=" <?php echo base_url('/edit')?> "> Ir al listado de Usuarios </a>

                </div>
            <?php elseif (session()->perfil_id == 2) : ?>
                <div>
                    <h3> Este es el perfil del cliente</h3>

                </div>
            <?php endif; ?>
        </div>

    </div>
</div>