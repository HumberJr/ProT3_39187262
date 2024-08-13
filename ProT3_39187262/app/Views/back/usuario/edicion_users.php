<div class="container">

      <h3>Modificar Usuario</h3>
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
      


        
        <div class="col-12">
          <label class="form-label" for="nombreInput">Nombre completo</label>
          <input name="nombre" type="text" class="form-control id="nombreInput"
          placeholder="Ingrese su nombre completo" value="<?=$editado['nombre']?>">
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
          placeholder="Ingrese su correo" value="<?=$editado['email']?>">
        </div>
        <!-- error email -->
        <?php if($validation->getError('email')){;?>
          <div class="alert alert-danger mt-2">
            <?= $error = $validation->getError('email');?>
          </div>
          <?php }?>
        <!-- fin error email -->

        <div class="col-3">
          <label class="form-label" for="telefonoInput">Telefono</label>
          <input name="telefono" type="nunmber" value="<?=$editado['telefono']?>" class="form-control id="telefonoInput" placeholder="Ingrese su numero">
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