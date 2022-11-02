<?php include("header.php")?>
<?php include("bd.php")?>

<?php
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
            if(!$resultado){
               die("query failed");}
            $_SESSION["message"]="Data have been updated succesfully";
            $_SESSION["message_type"] = "success";
            }
            else {
               //Si no se ha podido subir la imagen, mostramos un mensaje de error
               echo '<div><b>Ocurrió algún error al subir el fichero. No pudo guardarse.</b></div>';
            }
            }
   }}?>

<?php
if(isset($_GET['id'])) {
  $id = $_GET['id'];
  $consulta = "SELECT * FROM cuentas WHERE id='$id'";
  $resultado= mysqli_query($conn, $consulta);
  while  ($row = mysqli_fetch_array($resultado)){ 
    
  

?>

<div class="container">
    <div stiyle="text:align-center;">
<h1>Personal info</h1> <br>
<p>Basic info, like be visible to other people </p>
    </div>

    <div class="container-fluid">
        <div class="row">
        <div class=" col-2 col-xs-2 col-sm-2 col-md-2 col-lg-1 col-xl-1 col-xxl-1"></div>
      <div class="col-8 col-xs-8 col-sm-8 col-md-8 col-lg-10 col-xl-10 col-xxl-10 card">
      <table class="table">
          <thead>
            <tr>
              <th scope="col"><h3>Profile</h3><p class="fw-normal">Some info may be visible to other people</p></th>
              <th scope="col"><button name='edit' type="button" class="btn btn-outline-secondary" ><a href="edit.php?id=<?php echo $row['id'] ?>">Edit</a></button></th>
            </tr>
          </thead>
          <tbody>

            <tr>
              <td scope="row">PHOTO</td>
              <td colspan="2"><img width="100" height="100" class="rounded" src="<?php echo $row['photo'];?>
"></td>

            </tr>
            <tr>
              <td scope="row">NAME</td>
              <td colspan="2"><?php echo $row['nombre']?></td>
            </tr>
            <tr>
              <td scope="row">BIO</td>
              <td colspan="2"><?php echo $row['bio']?></td>
            </tr>
            <tr>
              <td scope="row">PHONE</td>
              <td colspan="2"><?php echo $row['phone']?></td>
            </tr>
            <tr>
              <td scope="row">EMAIL</td>
              <td colspan="2"><?php echo $row['email']?></td>
            </tr>
            <tr>
              <td scope="row">PASSWORD</td>
              <td colspan="2"><?php echo $row['passsword']?></td>
             </tr>
          </tbody>
        </table>
      </div>
      <div class="col-2 col-xs-2 col-sm-1 col-md-2 col-lg-1 col-xl-1 col-xxl-1"></div>
        </div>
    </div>
</div>

  <?php }}?>

<?php include("footer.php")?>

