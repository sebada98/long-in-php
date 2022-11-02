<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
	<!-- enctype="multipart/form-data" es para que el formulario permita subir una imagen -->
	<form class="form-horizontal form-label-left" action="foto_agregar.php" method="POST" enctype="multipart/form-data"> 
				<div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12">Codigo</label>
          <div class="col-md-9 col-sm-9 col-xs-12">
          	  <input type="text" name="id">
          </div>
        </div>
		<div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12">Foto<i class="green"> (Tamaño max. 2 MB) <span class="required">*</span></i></label>
          <div class="col-md-9 col-sm-9 col-xs-12">
          <input  id="imagen" name="imagen" type="file" class="btn btn-success"> <!-- type= file permita subir una imagen -->
          </div>
        </div>
   <div class="ln_solid"></div>
       <div class="form-group">
            <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
	     		<input type="reset" name="Borrar" value="Borrar" class="btn btn-primary">
				<input type="submit" name="Registrar" value="Registrar" class="btn btn-success">
            </div>
       </div>

   </form>
</body>
</html>