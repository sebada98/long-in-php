<?php

include('bd.php');


if(isset($_POST['iniciar'])) {
    $correo = $_POST['email'];
    $password = $_POST['password'];

    $consulta= ( "SELECT * FROM cuentas WHERE (email='$correo' AND passsword='$password') ");
    $resultado =  mysqli_query($conn,$consulta);
    
    if (mysqli_num_rows($resultado)==1) {
        $row = mysqli_fetch_array($resultado);
        $id = $row["id"];
        header("location:personal_info.php?id=$id");

    }else if (mysqli_num_rows($resultado)==0) {
        header ("location:longin.php");
        echo "tu cuenta o contraseña es incorrecta";
    }
}
?>