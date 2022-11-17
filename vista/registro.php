<?php
        require_once"recursos/head.php";
        require_once"modal/validaRegistro.php";
        require_once"modal/validaInputs.php";
        require_once"modal/mensajeError.php";
    ?>
    <br>
    <form action="index.php?registro&guardar"  id="sistemaform" method="POST">
        <div class="container-sm font-monospace">
            <h2 class="centrado">REGISTRO DE INSTRUMENTOS</h2>
            <table class="table table-striped centrado">
                <thead>
                    <th>CODIGO</th>
                    <th >INSTRUMENTO</th>
                    <th>DESCRIPCION</th>
                    <th>SISTEMA CRITICO</th>
                    <th>GUARDAR</th>
                </thead>
                <tbody>
                    <tr>
                        <td><input type="text" name="id" class="datos"></td>
                        <td><input type="text" name="instrumento" class="datos"></td>
                        <td><input type="text" name="norma" class="datos"></td>
                        <td><input type="text" name="descripcion" class="datos"></td>
                        <td><input type="" class="btn btn-danger"  name="guardar" id="GUARDAR" value="GUARDAR"></input></td>
                    </tr>
                </tbody>
            </table>
            <div>
                <a href="index.php" class="btn btn-primary" id="prueba">REGRESAR MENÚ PRINCIPAL</a>
            </div>
    </div>
    </form>
    <script src="public/javascript/mensaje.js"></script>
    <script>
        window.onload = function (){
           document.getElementById("GUARDAR").addEventListener("click",function(){
            validaFormulario();
           });
           document.getElementById("saveChanges").addEventListener("click",function(){
                guardarDatoServidor();
           });
           document.getElementById("cancelar").addEventListener("click",function(){
            limpiaInputs();
           });
            if(document.getElementById("mensajeServer")!=null){
                mensajeModalError();
            }
            document.getElementById("cerrarError").addEventListener("click",function(){
                if(document.getElementById("mensajeServer")!=null){
                    document.getElementById("mensajeServer").remove();
                }
            });
        }
    </script>
    
    <?php
        require_once"recursos/body.php";
    ?>