<?php
        require_once"recursos/head.php";
    ?>
        <div id="contenedorRegistro" class=" font-monospace">
            <div>
                <p class="fs-4 text">Registro de instrumentos</p>
                <a href="index.php?registro" class="btn btn-primary enable fs-5 text" tabindex="-1" role="button" aria-disabled="true">Registro</a>  
            </div>
        </div>
        <h1>AHORA SI CTM</h1>
        <table class="table table-striped font-monospace container-sm centrado">
            <thead>
                <th>CODIGO</th>
                <th>DESCRIPCION</th>
                <th>NORMA SA</th>
            </thead>
            <tbody>
                <?php
                    foreach($resultado as $row){
                        ?>
                        <tr>
                            <td><?php echo $row['instID'] ?></td>
                            <td><?php echo $row['instDescripcion'] ?></td>
                            <td><?php echo $row['instNormaCodigo'] ?></td>
                            <td><a href="index.php?editar" type="button" class="btn btn-primary">EDIT</a></td>
                            <td><a href="index.php?eliminar" type="button" class="btn btn-danger">DELETE</a></td>
                        </tr>
                        <?php
                    }
                ?>
                <tr></tr>
            </tbody>
        </table>
    <?php
        require_once"recursos/body.php";
    ?>
