<?php
    session_start();
    require_once"controlador/Controlador.php";
?>
<?php
    $controlador = new Controlador();
    if(isset($_GET['registro'])){
        if(isset($_GET['guardar'])){
            $controlador->guardar();
        }else{
            $controlador->registro();
        }
    }else{
        $controlador->index();
    }
	echo "DESDE SERVIDOR VIRTUAL BOX ESTOY" ;
?>
