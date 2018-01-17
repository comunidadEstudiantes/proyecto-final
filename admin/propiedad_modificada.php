<!DOCTYPE html>
<html>
<head>
	<title>inserción exitosa</title>
	<link rel="stylesheet" type="text/css" href="http://localhost/tarea2php/css/bootstrap.min.css">
</head>
<body>
   <div class="container">
      <?php

         $link = mysql_connect("localhost", "root", "") or die ("ERROR AL CONECTAR"); 
         $db_select = mysql_select_db("inmobiliaria"); 

     
         $tipo=$_POST["tipo"];
         $zona=$_POST["zona"];
         $direccion=$_POST["direccion"];
         $barrio=$_POST["barrio"];
         $descripcion=$_POST["descripcion"];
         $disponible=$_POST["disponibilidad"];
         $servicio=$_POST["servicio"]; 
         $valor=$_POST["valor"];
         $administracion=$_POST["administracion"];

         $id_inmueble=$_POST["id_inmueble"];

         $q = "update inmuebles set tipo = '".$tipo."', zona = '".$zona."', direccion = '".$direccion."', barrio = '".$barrio."', descripcion = '".$id_inmueble."', disponible = '".$disponible."', servicio = '".$servicio."', valor = ".$valor.", admon = ".$administracion.";"; 
         $res = mysql_query($q,$link);

         echo "<h1>la propiedad con direccion".$direccion."fue actualizada con exito</h1>";    
        ?>
    <br>
    <br>
    <a class="btn btn-warning center-block col-md-2" href="http://localhost/proyecto-final/admin/index-admin.php" role="button">Volver</a>
    </div>
</body>
</html>