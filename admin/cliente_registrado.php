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

     $link = mysql_select_db ('inmobiliaria')
     or die('No se pudo seleccionar la base de datos');

     $nombre=$_GET["nombre"];
     $id=$_GET["id"];
     $telefono=$_GET["telefono"];
     $correo=$_GET["correo"];
     $tipo="Propietario";
    
     $p = mysql_query('insert into clientes values ('.$id.',"'.$nombre.'","'.$tipo.'",'.$telefono.',"'.$correo.'");')
     or die('Consulta fallida: '.mysql_error());

     //liberamos la conexion a mysql  
     echo "<h1>el cliente".$nombre."fue registrado con exito</h1>";    
     mysql_close($link);
?>

    <br><br>
    <a class="btn btn-warning center-block col-md-2" href="http://localhost/proyecto-final/admin/index-admin.php" role="button">Volver</a>
    </div>
</body>
</html>