<?php
include ("bd.php");

if (isset($_POST['register'])) {
 
	    $correo = $_POST['email'];
	    $password = $_POST['password'];
		$name = $_POST['name'];
		$bio = $_POST['bio'];
		$phone = $_POST['phone'];
	    
	    $consulta = "INSERT INTO cuentas( email, passsword, nombre, bio, phone) VALUES ('$correo','$password','$name','$bio','$phone')";
	    $resultado = mysqli_query($conn,$consulta);
	    if (!$resultado) {
	    	die("fallo la conexion");

    }

header("location:longin.php");
}

?>