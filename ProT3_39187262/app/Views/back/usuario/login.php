<div class="container"> 
<!-- Inicio mensaje de error -->
<?php if(session()->getFlashdata('msg')):?>
        <div class="alert alert-warning">
            <?=session()->getFlashdata('msg')?>
        </div>
    <?php endif;?>
    <h4>Usuario administrador de prueba </h4>
  <ul>
    <li> Usuario: admin1 </li>
    <li>Contraseña: admin1</li>
 </ul>

<div class="container mt-5 mb-5 d-flex justify-content-center">
    <div class="text-center">
        <h3>Inicie sesion</h3>
    
        <!-- Inicio formulario de login -->
        <form method="post" action="<?php echo base_url('/enviarlogin');?>">
            <div class="card-body" media="(max-width:768px)">
            
                <div class="mb-2">
                    <label for="exampleFormControlInput1" class="form-label"> Usuario</label>
                    <input name="usuario" type="text" class="form-control" placeholder="Ingrese su usuario">
                </div>

                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Contraseña</label>
                    <input name="pass" type="password" class="form-control" placeholder="Ingrese contraseña">
                
                </div>
        

                <button type="submit" class="btn btn-success">Ingresar</button>
                <a href="<? echo base_url('login'); ?>" class="btn btn-danger"> Cancelar</a>
                <br> <span> ¿Aún no se ha registrado? <a href="<?php echo base_url('/voluntariado');?>"> Registrate acá</a></span>
            </div>
        </form>
    </div>
</div>
</div>