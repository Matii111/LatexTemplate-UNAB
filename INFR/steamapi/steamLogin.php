<?php
    $usuario=$_POST['usuario'];
    $contrasenia=$_POST['psw'];
    echo "$usuario,$contrasenia";

    // if(isset($_POST['usuario']) && !empty($_POST['usuario']) &&
    //    isset($_POST['psw']) && !empty($_POST['psw']))
    //     {
    //         echo "Exito al registrar usuario";      
    //         echo  "$usuario,$contrasenia";
    //     }else{
    //         echo "Ërror al registrar usuario";
    //     }
?>