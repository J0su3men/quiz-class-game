<?php
	



/*$resultados=$obj_connect->consultar("SELECT email_user, pass_user FROM tb_user");
*/

	$user=$_POST['usuario_sesion'];
	$password=$_POST['password_sesion'];
	require "controldb.php";

$obj_connect = new ControlDB();
	
	if(isset($_POST['abrir_sesion'])){
		$valid=false;
		/*$resultados=$obj_connect->query("SELECT email_user, pass_user FROM tb_user WHERE email_user='$user' and pass_user='$password'");
		print_r($resultados);*/

		if($resultado=$obj_connect->consultar("SELECT email_user, pass_user FROM tb_user WHERE email_user='$user' and pass_user='$password'")) {
			$valid = true;
			
			}
			if($valid>0){
		echo "<script>location.href='http://192.168.1.15/PRACTICAS/CursoPHP/colegio/home.html'</script>";
		}else {
			
			echo '<script>alert("ESTE USUARIO NO EXISTE, PORFAVOR REGISTRESE PARA PODER INGRESAR")</script> ';
			echo "<script>location.href='http://192.168.1.15/PRACTICAS/CursoPHP/colegio/index.html'</script>";
			
			}
		}
		
		

   

   
	
?>
