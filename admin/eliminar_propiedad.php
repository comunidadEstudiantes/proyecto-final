<!DOCTYPE html>
<html>
<head>
	<title>Remover imagen</title>
	<link rel="stylesheet" type="text/css" href="http://localhost/tarea2php/css/bootstrap.min.css">
</head>
<body>

   <div class="container">

<?php  
      
     $link = mysql_connect("localhost", "root", "") or die ("ERROR AL CONECTAR"); 
	 $db_select = mysql_select_db("inmobiliaria"); 
				
     $idInmueble=$_GET["id"];
     echo $idInmueble;

	 $q = "delete from imagenes where id_inmueble = ".$idInmueble; 
	 mysql_query($q, $link);
     
     $q2 = "delete from inmuebles where id = ".$idInmueble;
     mysql_query($q2, $link);

	 	echo "<h1>La propiedad con: ".$idInmueble." ha sido removida satisfactoriamente</h1>";  
?>
    <br>
    <br>
    <a class="btn btn-warning center-block col-md-2" href="http://localhost/proyecto-final/admin/index-admin.php" role="button">Volver</a>
    </div>
</body>
</html> 