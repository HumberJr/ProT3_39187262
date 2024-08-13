   <?php 
    $session = session();
    $nombre = $session->get('nombre');
    $perfil = $session->get('perfil_id');
    ?>
<nav class="navbar navbar-expand-lg bg-body-blue">
  <div class="container.fluid">
      <div class="navbar-header">
        <a class="navbar-brand me-auto barra" href="<?php echo base_url('principal')?>">
                <!-- /*PONER ALGO ACA */ -->
        </a>
      </div>
     <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" 
              aria-controls="navbarTogglerDemo03" aria-expanded="false"
              arial-label="Toggle navigation">
            <span class="navbar-toggler-icon"> </span>
    </button>
    <?php if(session()->perfil_id == 1): ?>
        <div class="btn btn-secondary active btnUser btn-sm">
          <a href="">ADMINISTRADOR: <?php echo session('nombre'); ?></a>
        </div>   
        <a class="navbar-brand" href="#"></a>
          <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <ul class="navbar-nav">
        
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?php echo base_url ('principal');?>">Inicio</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url ('importancia_valor');?>">Importancia y Valor</a>
        </li>

        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?php echo base_url ('/admin');?>">Usuarios</a>
        </li>

              <!-- <li class="nav-item">
                <a class="navbar-link" href='login'> Ingresar </a>
              </li>  -->

              <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('/logout');?>" tabindex="-1"
                aria-disabled="true"> Salir </a>
              </li>
            </ul>
          </div>

    <?php elseif(session()->perfil_id == 2): ?>
        <div class="btn btn-info active btnUser btn-sm">
            <a href=""> CLIENTE: <?php echo session('nombre'); ?> </a>
        </div>
          <!-- PARA CLIENTES QUE PUEDEN COMPRAR-->
        <a class="navbar-brand" href="#"></a>
          <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                  <a class="nav-link" href=""> </a>
              </li>

              <li class="nav-item">
                  <a class="nav-link" href=""> </a>
              </li>

              <li class="nav-item">
                  <a class="nav-link" href="<?php echo base_url('/logout');?>" tabindex="-1"
                  aria-disable="true"> Salir </a>
              </li>  
            </ul>
          </div>
        
        </div>
          <?php else: ?>
   <!-- INICIO BARRA DE NAVEGACION TODOS LOS USUARIOS -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">BIENVENIDOS</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?php echo base_url ('principal');?>">Inicio</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url ('importancia_valor');?>">Importancia y Valor</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url ('voluntariado');?>">¿Queres ayudar?</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url ('login');?>">Ingresar</a>
        </li>
        
      </ul>
      <?php endif; ?>      
    </div>

  </div>
</nav>
<!-- FIN BARRA NAVEGACION -->