<!DOCTYPE html>
<html>
<head>
	<title>Inmoviliaria</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/footer_style.css">
	<meta http-equiv="Content-type" content="text/html; charset=utf-8"/>
</head>
<body>
	<nav class="navbar navbar-default">
		  <div class="container">
			  <ul class="nav navbar-nav">
		        <li><a href="quienes_somos.html">Quienes somos<span class="sr-only">(current)</span></a></li>
		        <li><a href="alquiler.php">Alquiler</a></li>
		        <li><a href="contactenos.html">Contactenos</a></li>
		        <li><a href="index.html">Inicio</a></li>
		      </ul>
		  </div>
     </nav>

     <article class="container"> 
	     <div class="row">      
	     	    <h2 class="text-center"><strong>Venta</strong></h2>
	     	    <p class="text-center">Compra y venta de inmuebles</p>
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
					  <th class="active">otros</th>
				</tr>
		    <?php  
	           
				    $link = mysql_connect("localhost", "root", "") or die ("ERROR AL CONECTAR"); 
				    $db_select = mysql_select_db("inmobiliaria"); 
				     
				    $q = "select id,tipo,zona,direccion,barrio,descripcion,disponible,servicio,valor,admon,id_propietario from inmuebles where servicio = 'Compra'"; 
				    $res = mysql_query($q, $link);  
				     
                      
                    

				    while($row=mysql_fetch_array($res)){
                        $q2 = "select * from imagenes where id_inmueble = ".$row["id"];
                        $img = mysql_query($q2, $link);   
				    	$row2 = mysql_fetch_array($img);

	                   echo "<tr>";
	                         echo '<td>'.'<img src="data:image/jpg;base64,'.base64_encode($row2['archivo']).'" width="170" height="170"> <br></td>';
                             echo "<td>tipo: ".$row["tipo"]."<br>zona: ".$row["zona"]."<br>dirección: ".$row["direccion"]."<br>barrio: ".$row["barrio"]."<br>info: ".$row["descripcion"]."</td>";
                             echo "<td>alquiler o compra: ".$row["servicio"]."</td>";
                             echo "<td>disponibilidad: ".$row["disponible"]."</td>";
                             echo "<td>valor compra/aqluiler: ".$row["valor"]."<br>administracion (en caso de compra): ".$row["admon"]."</td>";
                             echo "<td><form action='mas_info.php' method='get'>";
	                             echo "<input type='hidden' name='id' value=".$row['id'].">";
	                             echo "<input type='submit' value='Saber más'>";
                             echo "</form></td>";
	                   echo "</tr>";
				    }
		    ?>
		    </table>
	    </article>

    <br><br>
      
    <footer class="footer footer-default" id="foot">
	      <div class="container">
	       <ul>
		        <li><p class="text-muted">Juan José Briceño</p></li> 
		        <li><p class="text-muted">Asesor - Desarrollador</p></li> 
		        <li><p class="text-muted">juancho_b_l@hotmail.com</p></li> 
		      </ul>
	      </div>
    </footer>
</body>