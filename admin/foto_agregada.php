<!DOCTYPE html>
<html>
<head>
	<title>Imagen insertada</title>
	<link rel="stylesheet" type="text/css" href="http://localhost/tarea2php/css/bootstrap.min.css">
</head>
<body>
   <div class="container">
      <?php
     $link = mysql_connect ('localhost', 'root','')
     or die('No se pudo conectar: '.mysql_error());

     mysql_query("SET NAMES 'utf8'");

     $link = mysql_select_db ('inmobiliaria',$link)
     or die('No se pudo seleccionar la base de datos');
       
     $id_inmueble=$_POST['id'];

     $myFile = $_FILES["my_file"];
     $fileCount = count($myFile["name"]);

                for ($i = 0; $i < $fileCount; $i++){
                    $dato=addslashes(file_get_contents($myFile["tmp_name"][$i]));
                    $p = mysql_query('insert into imagenes (archivo,id_inmueble) values ("'.$dato.'",'.$id_inmueble.')')
                    or die('no se pudo insertar imagen: '.mysql_error());                      
                }

     echo "<h1>las imagenes fueron registradas exitosamente</h1>";    
?>

    <br>
    <br>
    <a class="btn btn-warning center-block col-md-2" href="http://localhost/proyecto-final/admin/index-admin.php" role="button">Volver</a>
    </div>
</body>
</html>