<?php
require("controldb.php");

$nombre=$_POST['usuario'];
$clave=$_POST['contraseña'];

$consulta="SELECT * FROM tb_user WHERE email_user='$nombre' and pass_user='$clave'";
$result=mysql_query($consulta, $conectar) or die(mysql_error());
$num_rows=mysql_num_rows($result);

if($num_rows>0)
{
header('Location:http://localhost/kahoot/alumno.html');
}

else
{
	//mysql_query("INSERT INTO registro (nombre,email,usuario,clave) VALUES('".$_POST['nombre']."','".$_POST['correo']."','".$_POST['user']."','".$_POST['pass']."')",$conectar )or die(mysql_error());
	
echo("Error");
}
		

   

   
	
?>
