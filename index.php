<?php
    require_once"modelo/consultas.php";
    session_start();

    if(true){
        require_once"controlador/Controller_sistema.php";
        $proceso = new Controllersistemacritico();
        if(isset($_GET['registro'])){
            if(isset($_POST['guardar'])){
                $proceso->registro_save();
            }else{
                $proceso->registro_view();
            }
        }else{
            $proceso->index();
        }
    }
?>