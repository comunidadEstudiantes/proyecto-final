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
				<li><a href="contactenos.html">Contactenos</a></li>
				<li><a href="alquiler.php">Alquiler</a></li>
				<li><a href="venta.php">Compra</a></li>
				<li><a href="index.html">Inicio</a></li>
			  </ul>
		  </div>
	 </nav>

	 <article class="container"> 
		 <div class="row">      
				<h2 class="text-center"><strong>Otra información del inmueble</strong></h2>
				<p class="text-center">Compra y venta de inmuebles</p>
		 </div>
	 </article>

	 <br><br>

	  <article class="container">
			<div class="row">
			   <div class="col-md-6 text-center">
					<?php  
					   
					   $idInmueble=$_GET["id"];
					   

					   $link = mysql_connect("localhost", "root", "") or die ("ERROR AL CONECTAR"); 
					   $db_select = mysql_select_db("inmobiliaria"); 
					 
					   $q = "select tipo,zona,direccion,barrio,descripcion,disponible,servicio,valor,admon from inmuebles where id =".$idInmueble; 
					   $res = mysql_query($q, $link); 

						while($row=mysql_fetch_array($res)){
							 echo "<br>tipo: ".$row["tipo"]."<br>zona: ".$row["zona"]."<br>dirección: ".$row["direccion"]."<br>barrio: ".$row["barrio"]."<br>info: ".$row["descripcion"];
							 echo "<br>alquiler o compra: ".$row["servicio"];
							 echo "<br>disponibilidad: ".$row["disponible"];
							 echo "<br>valor compra/aqluiler: ".$row["valor"]."<br>administracion (en caso de compra): ".$row["admon"];
					}		
					?> 

               <br><br><br>
			<p><strong>Ahora que puede ver toda la información y las fotos sobre la propiedad y esta interezado puede llamar a un asesor al número
			   3128687278 o puede enviarnos un correo a <a href="mailto: juancho_b_l@hotmail.com">juancho_b_l@hotmail.com</a></strong></p>		
			</div>
			<div class="col-md-6">
				   <?php  
					   
					   $idInmueble=$_GET["id"];
					   

					   $link = mysql_connect("localhost", "root", "") or die ("ERROR AL CONECTAR"); 
					   $db_select = mysql_select_db("inmobiliaria"); 
					 
					   $q = "select * from imagenes where id_inmueble = ".$idInmueble; 
					   $imagenes = mysql_query($q, $link); 
                       


						while($row=mysql_fetch_array($imagenes)){
							echo '<img src="data:image/jpg;base64,'.base64_encode($row['archivo']).'" width="300" height="300"><br><br>';
					}		
					?> 
			</div>
		</div>	       
	</article>
</body>