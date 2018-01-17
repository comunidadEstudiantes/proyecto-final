<!DOCTYPE html>
<html>
	<head>
		<title>Bienvenido administrador</title>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css/footer_style.css">
		<meta http-equiv="Content-type" content="text/html; charset=utf-8"/>
	</head>
	<body>
	      
	      <article class="container"> 
		     <div class="row">      
		     	    <h2 class="text-center">Bienvenido administrador</h2>
		     	    <p class="text-center">A continuación puede ver los datos de los inmuebles que ya estan ingresador, y además al final puede encontrar otras opciones como modificar los inmuebles e ingresar una nueva propiedad o cliente</p>
		     </div>
	     </article>

	    <br><br>
         <article class="container">
		     <table class="table table-condensed">
			     <tr>
					  <th class="active">Foto del inmueble</th>
					  <th class="active">Informacion del inmueble</th>
					  <th class="active">Servicio</th>
					  <th class="active">disponibilidad</th>
					  <th class="active">costos</th>
					  <th class="active">identificación propietario</th>
					  <th class="active">Modificación</th>
				</tr>
		    <?php  
	           
				    $link = mysql_connect("localhost", "root", "") or die ("ERROR AL CONECTAR"); 
				    $db_select = mysql_select_db("inmobiliaria"); 
				     
				    $q = "select id,tipo,zona,direccion,barrio,descripcion,disponible,servicio,valor,admon,id_propietario from inmuebles"; 
				    $res = mysql_query($q, $link);  
				     
                      
                    

				    while($row=mysql_fetch_array($res)){
                        $q2 = "select * from imagenes where id_inmueble = ".$row["id"];
                        $img = mysql_query($q2, $link);   
				    	$row2 = mysql_fetch_array($img);

	                   echo "<tr>";
	                         echo '<td>'.'<img src="data:image/jpg;base64,'.base64_encode($row2['archivo']).'" width="170" height="170"></td>';
                             echo "<td>tipo: ".$row["tipo"]."<br>zona: ".$row["zona"]."<br>dirección: ".$row["direccion"]."<br>barrio: ".$row["barrio"]."<br>info: ".$row["descripcion"]."</td>";
                             echo "<td>alquiler o compra: ".$row["servicio"]."</td>";
                             echo "<td>disponibilidad: ".$row["disponible"]."</td>";
                             echo "<td>valor compra/aqluiler: ".$row["valor"]."<br>administracion (en caso de compra): ".$row["admon"]."</td>";
                             echo "<td>identificación del propietario: ".$row["id_propietario"]."<br>id del inmueble ".$row["id"]."</td>";
                             echo "<td><form action='agregar_foto.php' method='get'>";
	                             echo "<input type='hidden' name='id' value=".$row['id'].">";
	                             echo "<input type='submit' value='Agregar foto'>";
                             echo "</form>";
                             echo "<br><form action='modificar_propiedad.php' method='get'>";
	                             echo "<input type='hidden' name='id' value=".$row['id'].">";
	                             echo "<input type='submit' value='Modificar propiedad'>";
                             echo "</form>";
                              echo "<br><form action='eliminar_propiedad.php' method='get'>";
	                             echo "<input type='hidden' name='id' value=".$row['id'].">";
	                             echo "<input type='submit' value='eliminar propiedad'>";
                             echo "</form>";
                             echo "<br><form action='http://localhost/proyecto-final/mas_info.php' method='get'>";
	                             echo "<input type='hidden' name='id' value=".$row['id'].">";
	                             echo "<input type='submit' value='Saber más'>";
                             echo "</form></td>";
	                   echo "<tr>";
				    }
		    ?>
		    </table>
	    </article>

        <br><br>

	    <div class="container">
		    <div class="row">
		        <a class="btn btn-default col-md-offset-5" href="registrar-usuario.html" role="button">Ingresar cliente<br></a>
		    </div>
		    <br>
		    <div clas="row">
		        <a class="btn btn-default col-md-offset-5" href="ingresar.html" role="button">Ingresar propiedad<br></a>
		    </div>
	    </div>
	</body>
</html>
