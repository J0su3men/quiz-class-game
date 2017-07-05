<?php
$servidor="localhost";
$basedatos="kahoot";
$usuario="root";
$password="";

$conectar=mysql_connect("$servidor","$usuario","$password")or die(header("Location:index.html?error_login=0"));
mysql_select_db("$basedatos");

date_default_timezone_set('America/Mexico_City');
?>