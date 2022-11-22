<?php
    function conn(){
        $hostname = "127.0.0.1";
        $usuariodb = "root";
        $passworddb= "1234";
        $dbname= "STEAM";

        $conectar = mysqli_connect($hostname,$usuariodb,$passworddb,$dbname);
        return $conectar;
    }
?>