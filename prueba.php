<?php
        require_once"vista/recursos/head.php";
        require_once"modelo/consultas.php";
        require_once"modelo/Conexion.php";
        //require_once"vista/modal/mensaje.php";
    ?>
    
    <?php

        $datos = ["samuel","lujan","sarasi"];
        $datosdos = ["ines","lujan","sarasi"];
        echo "<h1>Samuel</h1>";
        $conexio = Conexion::open();
        $ps = $conexio->prepare("INSERT INTO instrumento (instID,instDescripcion,instNormaCodigo) VALUES(?,?,?)");
        $ps->execute(array($datos[0],$datos[1],$datos[2]));
        ///////////////

        $ps = $conexio->prepare("SELECT * FROM instrumento");
        $ps->execute();
        $resultado = $ps->fetchAll();
        print_r($resultado);
        ////////////////////
        
        //$ps->execute(array($datosdos[0],$datosdos[1],$datosdos[2]));
    ?>
    <?php
        require_once"vista/recursos/body.php";
    ?>