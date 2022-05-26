<div class="titulo_catalogo">
	<h1>
		<?php
			if($_GET[gen]!=""){
				$sql="select Genero from generos where IdGenero='$_GET[gen]'";
				$rs=mysql_query($sql);
				$r=mysql_fetch_assoc($rs);
				echo $r["Genero"];
			}else{
				echo "Cat&aacute;logo Completo";
			}
		?>
	</h1>
</div>
<div id="tabla">
	<div class="fila">
		<div class="C1">
			Portada
		</div>
		
		<div class="C2">
			Nombre
		</div>
		
		<div class="C2">
			Gen&eacutero
		</div>
		
		<div class="C2">
			Autor
		</div>
	</div>
	<?php
		if($_GET[gen]!=""){
			$sql="select * from libros inner join generos on libros.Genero=generos.IdGenero where libros.Genero='$_GET[gen]'";
		}else{
			$sql="select * from libros inner join generos on libros.Genero=generos.IdGenero";
		}
		
		$rs=mysql_query($sql);
		while($r=mysql_fetch_assoc($rs)){
	?>
	<a href="index.php?opc=9&libro=<?php echo $r["IdLibro"]?>">
		<div class="fila_libro">
			<div class="C1_libro">
				<img src="img/libros/<?php echo $r["Imagen"] ?>" height="100%">
			</div>
			
			<div class="C2_libro">
				<?php echo $r["Nombre"]?>
			</div>
			
			<div class="C2_libro">
				<?php echo $r["Genero"]?>
			</div>
			
			<div class="C2_libro">
				<?php echo $r["Autor"]?>
			</div>
		</div>
	</a>
		<?php } ?>
</div>