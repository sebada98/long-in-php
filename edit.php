<?php include("header.php")?>
<?php include("bd.php")?>

<?php 
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $consulta = "SELECT * from cuentas where id = $id";
    $resultado = mysqli_query($conn, $consulta);
    if (mysqli_num_rows($resultado)==1) {
        $row = mysqli_fetch_array($resultado);
        
        $photo= $row['photo'];
        $name= $row['nombre'];
        $bio= $row['bio'];
        $phone= $row['phone'];
        $email= $row['email'];
        $password= $row['passsword'];
    }
}
if (isset($_POST['resultado'])) {
    $id = $_GET['id'];
    $name = $_POST ['name'];
    $bio = $_POST ['bio'];
    $phone = $_POST ['phone'];
    $email = $_POST ['email'];
    $password = $_POST ['password'];
    $consulta= "UPDATE cuentas SET nombre='$name', bio='$bio', phone='$phone', email='$email', passsword='$password' where  id ='$id'";
    mysqli_query($conn,$consulta);


    //codigo insertado
        //Recogemos el archivo enviado por el formulario
   $archivo = $_FILES['archivo']['name'];
   //Si el archivo contiene algo y es diferente de vacio
   if (isset($archivo) && $archivo != "") {
      //Obtenemos algunos datos necesarios sobre el archivo
      $tipo = $_FILES['archivo']['type'];
      $tamano = $_FILES['archivo']['size'];
      $temp = $_FILES['archivo']['tmp_name'];
      //Se comprueba si el archivo a cargar es correcto observando su extensión y tamaño
     if (!((strpos($tipo, "gif") || strpos($tipo, "jpeg") || strpos($tipo, "jpg") || strpos($tipo, "png")) && ($tamano < 2000000))) {
        echo '<div><b>Error. La extensión o el tamaño de los archivos no es correcta.<br/>
        - Se permiten archivos .gif, .jpg, .png. y de 200 kb como máximo.</b></div>';
     }
     else {
        //Si la imagen es correcta en tamaño y tipo
        //Se intenta subir al servidor
        if (move_uploaded_file($temp, 'images/'.$archivo)) {
            //Cambiamos los permisos del archivo a 777 para poder modificarlo posteriormente
            chmod('images/'.$archivo, 0777);
            //Mostramos el mensaje de que se ha subido co éxito
            // echo '<div><b>Se ha subido correctamente la imagen.</b></div>';
            //Mostramos la imagen subida
            // echo '<p><img src="images/'.$archivo.'"></p>';
            // echo $archivo;
           // $pic = "./images/$archivo";
            echo $id;
            $consulta= "UPDATE cuentas SET photo='./images/$archivo' WHERE id=$id";
            //$query= "UPDATE users SET pictures='./images/$archivo', nombres='.$nombre', descriptions='.$description', telefono='.$phone', emails='.$emails', pass='.$pass' WHERE id=$id";
            //$query=mysql_query("UPDATE users SET telefono ='".$phone."', descriptions = '".$description."' WHERE id = '".$id."' ");
            //$query= "UPDATE users SET pictures='/images/$archivo', nombres='.$nombre', descriptions='.$description', telefono=.$phone, emails='.$emails', pass='.$pass' WHERE id=$id";
            $resultado=mysqli_query($conn,$consulta);
            // echo $description;
            if(!$result){
               die("query failed");}
            $_SESSION["message"]="Data have been updated succesfully";
            $_SESSION["message_type"] = "success";
            }
            else {
               //Si no se ha podido subir la imagen, mostramos un mensaje de error
               echo '<div><b>Ocurrió algún error al subir el fichero. No pudo guardarse.</b></div>';
            }
            }
   }


      header("Location: personal_info.php?id=$id");
    
}
?>
<div class="container p-4">
    <div class="row">
        <div class="col-md-4 mx-auto">
            <div class="card card-body">
                <form action="personal_info.php?id=<?php echo $_GET['id'];?>" method="POST" enctype="multipart/form-data">
                    <div class="card-body">
                    <input accept="image/png, image/jpeg" name="archivo" id="archivo" type="file" placeholder="Update photo">

                    </div>
                    
                    <div class="card-body">
                        <input type="text" name="name" value="<?php echo $row['nombre'] ?>" class="form-control" placeholder="Update name">
                    </div>
                    <div class="card-body">
                        <textarea name="bio" id=""  rows="2" class="form-control" placeholder="Update Descrption"><?php echo $row['bio'] ?></textarea>
                    </div>
                    <div class="card-body">
                        <input type="text" name="phone" value="<?php echo $row['phone'] ?>" class="form-control" placeholder="Update phone">
                    </div>
                    <div class="card-body">
                        <input type="text" name="email" value="<?php echo $row['email'] ?>" class="form-control" placeholder="Update email">
                    </div>
                    <div class="card-body">
                        <input type="text" name="password" value="<?php echo $row['passsword'] ?>" class="form-control" placeholder="Update password">
                    </div>
                    
                    <div class="card-body">
                        <a href="personal_info.php?id=<?php echo $row['id'] ?>">
                            <button type="submit" class="btn btn-info btn-block w-100" name="resultado">
                            update
                        </button>
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php include("footer.php")?>

