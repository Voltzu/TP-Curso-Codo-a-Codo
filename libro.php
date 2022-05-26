<div id="banner_libro">
	<form action='index.php?opc=shop_success' method='get'>
		<h1> 
			<?php
				$sql="select * from libros inner join generos on libros.Genero=generos.IdGenero where IdLibro='$_GET[libro]'";
				$rs=mysql_query($sql);
				$r=mysql_fetch_assoc($rs);
				echo $r["Nombre"];
				if($_SESSION[nivel]!=""){
					echo "<button type='submit' style='float:right;' name='opc' value='shop_success' class='button'>Comprar</button>";
				}
			?>
		</h1>
	</form>	
</div>
<div id="contenedor">
	<div id="img">
		<img src="img/libros/<?php echo $r["Imagen"] ?>" height="100%">
	</div>
	<div id="descripcion">
		<h2>Autor</h2>
		<?php echo $r["Autor"] ?>
		<h2>G&eacute;nero</h2>
		<?php echo $r["Genero"] ?>
		<h2>A&ntilde;o</h2>
		<?php echo $r["Anio"] ?>
		<h2>Editorial</h2>
		<?php echo $r["Editorial"] ?>
		<h2>Precio</h2>
		$ <?php echo $r["Precio"] ?>
		<h2>Descripcion</h2>
		<?php echo $r["Descripcion"] ?>
		
	</div>
</div>