<div class="container">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Cliente N°</th>
                <th scope="col">Nombre</th>
                <th scope="col">E-mail</th>
                <th scope="col">Telefono</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach( $users as $user): ?>
            <tr>
                <th scope="row"><?php echo $user['id_usuario'];?></th>
                <td><?php echo $user['nombre'];?></td>
                <td><?php echo $user['email'];?></td>
                <td><?php echo $user['telefono'];?></td>
                <td><a href="<?= base_url('/edit')?>"> Editar </a> </td>
            </tr>

        <?php endforeach; ?>
        </tbody>
    </table>
                            
</div>