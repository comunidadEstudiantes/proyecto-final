<html>
	<head>
		<title>Inmobiliaria SB- Pagina del Administrador</title>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css/footer_style.css">
		<meta http-equiv="Content-type" content="text/html; charset=utf-8"/>
	</head>
	
	<body>

	    <div class="container text-center">
				<h1>Por favor seleccione una imagen</h1>
				<br><h3>si el cliente le pidió que agregue una foto a su inmueble, por favor hagalo</h3>	
		</div>
	
		<br><br>

        <div class="container">
         <div class="row">
	         	<form action="foto_agregada.php" method="post" enctype="multipart/form-data">
				<?php  

	                             echo "<input type='hidden' name='id' value=".$_GET['id'].">";
	                             echo "<div class='form-group'></label>";
	                             	echo "<label for='exampleInputFile'>";
	                             	echo "<input type='file' name='my_file[]' multiple>";
	                             echo "</div>";	
					?>               
	                  
	                <div class="row">
	                   <div class="col-md-offset-5">
	                          <input type="submit" value="Ingresar inmueble" class="btn btn-default col-md-4">
	                        </div>  
	                   </div>
	        </form>
         </div>	
     	</div>
	</body>
</html>