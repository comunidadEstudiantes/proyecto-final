<!DOCTYPE html>
<html>
<head>
	<title>inserción exitosa</title>
	<link rel="stylesheet" type="text/css" href="http://localhost/tarea2php/css/bootstrap.min.css">
</head>
<body>
   <div class="container">
      <?php
 
     //conexion de mysql con php
     $link = mysql_connect ('localhost', 'root','')
     or die('No se pudo conectar: '.mysql_error());
     //echo 'Connected successfully';

     mysql_query("SET NAMES 'utf8'");

     $link = mysql_select_db ('inmobiliaria',$link)
     or die('No se pudo seleccionar la base de datos');

     
                
         $tipo=$_POST["tipo"];
         $zona=$_POST["zona"];
         $direccion=$_POST["direccion"];
         $barrio=$_POST["barrio"];
         $descripcion=$_POST["descripcion"];
         $disponible="Si";
         $servicio=$_POST["servicio"]; 
         $valor=$_POST["valor"];
         $administracion=$_POST["administracion"];
         $id_propietario=$_POST["id_propietario"];

        $p = mysql_query('insert into inmuebles (tipo,zona,direccion,barrio,descripcion,disponible,servicio,valor,admon,id_propietario) values ("'.$tipo.'","'.$zona.'","'.$direccion.'","'.$barrio.'","'.$descripcion.'","'.$disponible.'","'.$servicio.'",'.$valor.',"'.$administracion.'",'.$id_propietario.')') or die('Consulta fallida: '.mysql_error());

                
         //aqui comienza el codigo para las imagenes
         
                $myFile = $_FILES["my_file"];
                $fileCount = count($myFile["name"]);
                echo $myFile["type"][1];
                $query = 'select id from inmuebles where direccion="'.$direccion.'"';

                $result = mysql_query($query) or die('No se puede consultar la direccion: '.mysql_error());

                $array = mysql_fetch_array($result,MYSQL_ASSOC);


                for ($i = 0; $i < $fileCount; $i++){
                $dato=addslashes(file_get_contents($myFile["tmp_name"][$i]));
                $p = mysql_query('insert into imagenes (archivo,id_inmueble) values ("'.$dato.'",'.$array["id"].')')
                or die('no se pudo insertar imagen: '.mysql_error());                      
                }

     echo "<h1>la propiedad con direccion".$direccion."fue registrada con exito</h1>";    
?>
    <br>
    <br>
    <a class="btn btn-warning center-block col-md-2" href="http://localhost/proyecto-final/admin/index-admin.php" role="button">Volver</a>
    </div>
</body>
</html>