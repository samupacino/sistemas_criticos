<?php
        require_once"recursos/head.php";
        require_once"modal/validaRegistro.php";
        require_once"modal/validaInputs.php";
        require_once"modal/mensajeError.php";
    ?>
    
    <a href="index.php?registro&samuel" class="btn btn-primary" id="prueba">PRUEBA</a>
    <form action=""  id="sistemaform" method="POST">
        <table>
            <thead>
                <th>INSTRUMENTO</th>
                <th>DESCRIPCION</th>
                <th>SISTEMA CRITICO</th>
                <th>GUARDAR</th>
            </thead>
            <tbody>
                <tr>
                    <td><input type="text" name="instrumento" class="datos"></td>
                    <td><input type="text" name="descripcion" class="datos"></td>
                    <td><input type="text" name="norma" class="datos"></td>
                    <td><input type="" class="btn btn-danger"  name="guardar" id="GUARDAR" value="GUARDAR"></input></td>
                </tr>
            </tbody>
        </table>
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
            /*
            document.getElementById("prueba").addEventListener("click",function(){
                const myModal_error = new bootstrap.Modal(document.getElementById('mensajeError'), {
                     keyboard: false,
                });
            myModal_error.show();
            });*/
        }
    </script>
    
    <?php
        require_once"recursos/body.php";
    ?>