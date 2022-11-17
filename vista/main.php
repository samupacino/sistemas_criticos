<?php
        require_once"recursos/head.php";
        require_once"vista/modal/mensajeError.php";
    ?>
        <div id="contenedorRegistro" class=" font-monospace">
            <div>
                <p class="fs-4 text">Registro de instrumentos</p>
                <a href="index.php?registro" class="btn btn-primary enable fs-5 text" tabindex="-1" role="button" aria-disabled="true">Registro</a>  
            </div>
        </div>
        <table class="table table-striped font-monospace container-sm centrado">
            <thead>
                    <th>CODIGO</th>
                    <th >INSTRUMENTO</th>
                    <th>DESCRIPCION</th>
                    <th>SISTEMA CRITICO</th>
            </thead>
            <tbody>
                <?php
                    foreach($resultado as $row){
                        ?>
                        <tr>
                            <td><?php echo $row['codigoInstrumento'] ?></td>
                            <td><?php echo $row['instID'] ?></td>
                            <td><?php echo $row['instNorma'] ?></td>
                            <td><?php echo $row['instDescripcion'] ?></td>
                            <td><a href="index.php?editar" type="button" class="btn btn-primary">EDITAR</a></td>
                            <td><a href="index.php?eliminar" type="button" class="btn btn-danger">ELIMINAR</a></td>
                        </tr>
                        <?php
                    }
                ?>
                <tr></tr>
            </tbody>
        </table>
    <script src="public/javascript/mensaje.js"></script>
    <script>
      
        window.onload  = function(){
            if(document.getElementById("mensajeServer") != null){
                mensajeModalError();
            }
            document.getElementById("cerrarError").addEventListener("click",function(){
                document.getElementById("mensajeServer").remove();
            });
        }
    </script>
    <?php
        require_once"recursos/body.php";
    ?>
