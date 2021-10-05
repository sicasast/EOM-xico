<?php
$host="localhost";
$user="root";
$pass="";
$bd="eomexico";
$conectar=mysqli_connect($host,$user,$pass,$bd);
if(!$conectar){
    echo "error al conectar al servidor de bases de datos";
}
?>