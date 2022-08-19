<?php
        require_once"vista/recursos/head.php";
        require_once"vista/modal/mensaje.php";
    ?>
    <p>
    <?php
              if(isset($_SESSION['mensaje'])){
                  echo "samuel estamos mal";
                  unset($_SESSION['mensaje']);
              }
          ?>
    </p>
    <?php
        require_once"vista/recursos/body.php";
    ?>