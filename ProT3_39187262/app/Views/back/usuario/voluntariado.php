<div>
    <h2> ¿Queres ser parte de este proyecto?</h2>
    <p>Podes formar parte de los equipos que protegen y mantienen esta maravillosa reserva. Rellena el formulario y nos contactaremos para brindarte mas informacion</p>
  <!-- INICIO FORMULARIO -->

    <div class="container">

      <h3>Registrate y formá parte de esta experiencia</h3>
      <?php $validation = \Config\Services::validation();?>
      <form method="post" action="<?php echo base_url('/enviar-form')?>" class="row g-3 mt-3">

        <?=csrf_field();?>
        <?=csrf_field();?>

        <?php if(!empty(session()->getFlashdata('fail'))):?>
          <div class="alert alert-danger"><?=session()->getFlashdata('fail');?></div> 
        <?php endif ?>

        <?php if(!empty(session()->getFlashdata('success'))):?>
          <div class="alert alert_danger"> <?=session()->getFlashdata('success');?> </div>
        <?php endif ?>  
      


        <div class="col-3">
          <label class="form-label" for="usuarioInput">Usuario</label>
          <input name="usuario" type="text" class="form-control id="usuarioInput"
          placeholder="Ingrese usuario">
        </div>
        <!-- error usuario -->
         <?php if($validation->getError('usuario')){;?>
          <div class="alert alert-danger mt-2">
            <?= $error = $validation->getError('usuario');?>
          </div>
          <?php } ?>
        <!-- fin error usuario -->

        <div class="col-3">
          <label class="form-label" for="passiInput">Contraseña</label>
          <input name="pass" type="password" class="form-control id="passInput" placeholder="Ingrese contraseña">
        </div>

        <div class="col-12">
          <label class="form-label" for="nombreInput">Nombre completo</label>
          <input name="nombre" type="text" class="form-control id="nombreInput"
          placeholder="Ingrese su nombre completo">
        </div>
        <!-- error nombre -->
        <?php if($validation->getError('nombre')){;?>
          <div class="alert alert-danger mt-2">
            <?= $error = $validation->getError('nombre');?>
          </div>
          <?php }?>
          <!-- fin error nombre -->

        <div class="col-12">
          <label class="form-label" for="emailInput">Correo electronico</label>
          <input name="email" type="email" class="form-control id="emailInput"
          placeholder="Ingrese su correo">
        </div>
        <!-- error email -->
        <?php if($validation->getError('email')){;?>
          <div class="alert alert-danger mt-2">
            <?= $error = $validation->getError('email');?>
          </div>
          <?php }?>
        <!-- fin error email -->

        <div class="col-3">
          <label class="form-label" for="ciudadInput">Ciudad</label>
          <input name="ciudad" type="text" class="form-control id="ciudadInput"
          placeholder="Ciudad de Residencia">
        </div>
        <!-- error ciudad-->
        <?php if($validation->getError('ciudad')){;?>
          <div class="alert alert-danger mt-2">
            <?= $error = $validation->getError('ciudad');?>
          </div>
          <?php }?>
        <!-- fin error ciudad -->

        <div class="col-3">
          <label class="form-label" for="telefonoInput">Telefono</label>
          <input name="telefono" type="nunmber" class="form-control id="telefonoInput" placeholder="Ingrese su numero">
        </div>
        <!-- error telefono-->
        <?php if($validation->getError('telefono')){;?>
          <div class="alert alert-danger mt-2">
            <?= $error = $validation->getError('telefono');?>
          </div>
          <?php }?>
        <!-- fin error telefono -->
          
          <button type="submmit" value="Enviar" class="btn btn-info"> ENVIAR </button>
          <button   type="reset" value="cancelar" class="btn btn-danger"> CANCELAR </button>

      </form>
    </div>
     <!-- FIN FORMULARIO -->
 </div>